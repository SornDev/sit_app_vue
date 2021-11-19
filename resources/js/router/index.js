import {createWebHistory, createRouter} from "vue-router";

import Home from '../pages/Home';
import About from '../pages/About';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';

import Books from '../components/Books';
import AddBook from '../components/AddBook';
import EditBook from '../components/EditBook';

import Users from '../components/users/Users';
import AddUser from '../components/users/Add_user';
import Order from '../components/service/Order';
import Repaire from '../components/service/Repaire';
import Equipment from '../components/setting/Equipment';
import Transection from '../components/transection/Transection';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'books',
        path: '/books',
        component: Books
    },
    {
        name: 'addbook',
        path: '/books/add',
        component: AddBook
    },
    {
        name: 'editbook',
        path: '/books/edit/:id',
        component: EditBook
    },
    {
        name: 'users',
        path: '/users',
        component: Users
    },
    {
        name: 'add-users',
        path: '/users/add',
        component: AddUser
    },
    {
        name: 'order',
        path: '/service/order',
        component: Order
    },
    {
        name: 'repaire',
        path: '/service/repaire',
        component: Repaire
    },
    {
        name: 'equipment',
        path: '/setting/equipment',
        component: Equipment
    },
    {
        name: 'transection',
        path: '/transection',
        component: Transection
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
