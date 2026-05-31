// POS System Application

// Initialize Alpine.js stores
window.stores = {
    cart: [],
    auth: {
        user: null,
        isLoggedIn: false,
    },
};

// Cart Management
function addToCart(product) {
    const existingItem = stores.cart.find(item => item.id === product.id);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        stores.cart.push({ ...product, quantity: 1 });
    }
    updateCartUI();
}

function removeFromCart(productId) {
    stores.cart = stores.cart.filter(item => item.id !== productId);
    updateCartUI();
}

function updateQuantity(productId, quantity) {
    const item = stores.cart.find(item => item.id === productId);
    if (item) {
        item.quantity = quantity;
        if (item.quantity <= 0) {
            removeFromCart(productId);
        } else {
            updateCartUI();
        }
    }
}

function updateCartUI() {
    // Update cart totals
    const subtotal = stores.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const tax = subtotal * 0.05;
    const total = subtotal + tax;

    // Dispatch custom event for listeners
    window.dispatchEvent(new CustomEvent('cart-updated', {
        detail: { cart: stores.cart, subtotal, tax, total }
    }));
}

// Search functionality
function searchProducts(query) {
    // Implement search logic
    console.log('Searching for:', query);
}

// Print functionality
function printInvoice() {
    window.print();
}

// Format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat('bn-BD', {
        style: 'currency',
        currency: 'BDT',
    }).format(amount);
}

// Confirmation dialog
function confirmAction(message = 'Are you sure?') {
    return confirm(message);
}

// Show notification
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    console.log('POS System initialized');
});
