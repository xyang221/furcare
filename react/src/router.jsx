import {Navigate, createBrowserRouter} from "react-router-dom";
import NotFound from "./pages/NotFound";
import Login from "./pages/Login";
import Signup from "./pages/Signup";
import Users from "./pages/Users";
import DefaultLayout from "./components/DefaultLayout";
import GuestLayout from "./components/GuestLayout";
import Dashboard from "./pages/Dashboard";
import UserForm from "./pages/UserForm";
import RegisterClient from "./pages/RegisterClient";
import PetOwners from "./pages/PetOwners";
import PetOwnerForm from "./pages/PetOwnerForm";

const router = createBrowserRouter([
    {
        path:'/',
        element:<DefaultLayout />,
        children:[
            {
                path: '/',
                element:<Navigate to='/dashboard' />
            },
            
            {
                path:'/dashboard',
                element:<Dashboard />
            },

            {
                path:'/users',
                element:<Users />
            },

            {
                path:'/users/new',
                element:<UserForm key="userCreate"/>
            },
            {
                path:'/users/:id',
                element:<UserForm key="userUpdate"/>
            },

            {
                path:'/user/:id',
                element:<UserForm key="userUpdate"/>
            },

            {
                path:'/register-client',
                element:<RegisterClient />
            },

            {
                path:'/petowners',
                element:<PetOwners />
            },

            {
                path:'/petowners/new',
                element:<PetOwnerForm key="petownerCreate"/>
            },
            {
                path:'/petowners/:id',
                element:<PetOwnerForm key="petownerUpdate"/>
            },
           
        ]
    },
    {
        path:'/',
        element:<GuestLayout/>,
        children:[
            {
                path:'/login',
                element:<Login />
            },
            {
                path:'/signup',
                element:<Signup />
            },
           
        ]
    },
    {
        path:'*',
        element:<NotFound />
    }
])

export default router;
