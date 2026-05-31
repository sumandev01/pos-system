// POS System JavaScript

// Initialize tooltips and popovers
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Bootstrap tooltips
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
});

// Shopping Cart Functions
let cart = [];

function addToCart(productId, productName, price) {
  const existingItem = cart.find(item => item.id === productId);
  
  if (existingItem) {
    existingItem.quantity++;
  } else {
    cart.push({
      id: productId,
      name: productName,
      price: parseFloat(price),
      quantity: 1
    });
  }
  
  updateCart();
}

function removeFromCart(productId) {
  cart = cart.filter(item => item.id !== productId);
  updateCart();
}

function updateQuantity(productId, quantity) {
  const item = cart.find(item => item.id === productId);
  if (item) {
    item.quantity = parseInt(quantity);
    if (item.quantity <= 0) {
      removeFromCart(productId);
    } else {
      updateCart();
    }
  }
}

function updateCart() {
  const cartItems = document.getElementById('cartItems');
  const cartSummary = document.getElementById('cartSummary');
  
  if (!cartItems) return;
  
  cartItems.innerHTML = '';
  let subtotal = 0;
  
  cart.forEach(item => {
    const itemTotal = item.price * item.quantity;
    subtotal += itemTotal;
    
    const cartItem = document.createElement('div');
    cartItem.className = 'cart-item';
    cartItem.innerHTML = `
      <div>
        <strong>${item.name}</strong>
        <br>
        <small>৳${item.price.toFixed(2)} x ${item.quantity}</small>
      </div>
      <div class="text-right">
        <strong>৳${itemTotal.toFixed(2)}</strong>
        <br>
        <button class="btn btn-sm btn-danger" onclick="removeFromCart(${item.id})">Delete</button>
      </div>
    `;
    cartItems.appendChild(cartItem);
  });
  
  // Update summary
  const tax = subtotal * 0.05; // 5% tax
  const total = subtotal + tax;
  
  if (cartSummary) {
    cartSummary.innerHTML = `
      <div class="summary-row">
        <span>Subtotal:</span>
        <span>৳${subtotal.toFixed(2)}</span>
      </div>
      <div class="summary-row">
        <span>Tax (5%):</span>
        <span>৳${tax.toFixed(2)}</span>
      </div>
      <div class="summary-row total">
        <span>Total:</span>
        <span>৳${total.toFixed(2)}</span>
      </div>
    `;
  }
}

// Search functionality
function searchProducts(query) {
  const rows = document.querySelectorAll('tbody tr');
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    row.style.display = text.includes(query.toLowerCase()) ? '' : 'none';
  });
}

// Print invoice
function printInvoice() {
  window.print();
}

// Delete with confirmation
function deleteConfirm(message = 'Are you sure?') {
  return confirm(message);
}

// Filter by category
function filterByCategory(category) {
  const rows = document.querySelectorAll('tbody tr');
  rows.forEach(row => {
    if (category === 'all' || row.getAttribute('data-category') === category) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
}

// Format currency
function formatCurrency(amount) {
  return '৳' + parseFloat(amount).toFixed(2);
}

// Sidebar toggle for mobile
function toggleSidebar() {
  const sidebar = document.querySelector('.sidebar');
  sidebar.classList.toggle('show');
}