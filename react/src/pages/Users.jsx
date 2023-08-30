import React, { useEffect, useState } from "react";
import axiosClient from "../axios-client";
import { Link } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function Users() {
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(false);

    const { setNotification } = useStateContext();

    const getUsers = () => {
        
        setLoading(true);
        axiosClient.get('/users')
            .then(({ data }) => {
                setLoading(false);
                setUsers(data.data);
            })
            .catch(() => {
                setLoading(false);
            });
    };

    const onDelete = (u) => {
        if (!window.confirm("Are you sure?")) {
            return;
        }

        axiosClient.delete(`/users/${u.id}`).then(() => {
            setNotification("User deleted");
            getUsers();
        });
    };

    useEffect(() => {
        getUsers();
    }, []);

    return (
        <div>
            <div className="default-form animated fadeInDown">
                <div className="form">
                    <h1 className="title">USERS</h1>
                    <Link to="/users/new" className="btn">
                        Add new
                    </Link>

                    <div className="card animated fadeInDown">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Created Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            {loading && (
                                <tbody>
                                    <tr>
                                        <td colSpan={5}>Loading...</td>
                                    </tr>
                                </tbody>
                            )}
                            {!loading && (
                                <tbody>
                                    {users.map(u => (
                                        <tr key={u.id}>
                                            <td>{u.id}</td>
                                            <td>{u.username}</td>
                                            <td>{u.email}</td>
                                            <td>{u.created_at}</td>
                                            <td>
                                            <Link to={`/users/`+u.id} className="btn-edit">
                                                    Edit
                                                </Link>
                                               
                                                <button
                                                    onClick={() => onDelete(u)}
                                                    className="btn-delete"
                                                >
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            )}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
}
