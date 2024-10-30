<template>
    <nav>
        <h1>Guest Navigation</h1>
        <ul>
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/shop">Shop</router-link></li>
            <li><router-link to="/about">About Us</router-link></li>
            <li><router-link to="/contact">Contact Us</router-link></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'GuestHeader',
};
</script>
