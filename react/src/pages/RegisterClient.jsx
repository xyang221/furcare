import { useEffect, useState } from "react";
import { useNavigate, useParams } from "react-router-dom";
import axiosClient from "../axios-client";
import { useStateContext } from "../contexts/ContextProvider";

export default function RegisterClient() {
    const { id } = useParams();
    const navigate = useNavigate();
    const [loading, setLoading] = useState(false);
    const [errors, setErrors] = useState(null);
    const {setNotification} = useStateContext();
    const [user, setUser] = useState({
        id: null,
        firstname: "",
        lastname: "",
        contact_num: "",
        email: "",
        password: "",
        password_confirmation: "",
    });

    if (id) {
        useEffect(() => {
            setLoading(true);
            axiosClient
                .get(`/users/${id}`)
                .then(({ data }) => {
                    setLoading(false);
                    setUser(data);
                })
                .catch(() => {
                    setLoading(false);
                });
        }, []);
    }

    const onSubmit = (ev) => {
        ev.preventDefault();
        if (user.id) {
            axiosClient
                .put(`/users/${user.id}`, user)
                .then(() => {
                    setNotification
                    setNotification('User successfully updated')
                    navigate("/users");
                })
                .catch((err) => {
                    const response = err.response;
                    if (response && response.status == 422) {
                        setErrors(response.data.errors);
                    }
                });
        } else {
            axiosClient
                .post(`/users`, user)
                .then(() => {
                    setNotification('User successfully created')
                    navigate("/users");
                })
                .catch((err) => {
                    const response = err.response;
                    if (response && response.status == 422) {
                        setErrors(response.data.errors);
                    }
                });
        }
    };
    return (
        <div>
            {user.id && <h1>Update User: {user.name}</h1>}
            {!user.id && <h1 className="title">Registration</h1>}

            <div className="card animate fadeInDown">
                {loading && <div className="text-center">Loading...</div>}
                {errors && (
                    <div className="alert">
                        {Object.keys(errors).map((key) => (
                            <p key={key}>{errors[key][0]}</p>
                        ))}
                    </div>
                )}
                {!loading && (
                    <form onSubmit={onSubmit}>
                        <h2>Pet Owner Details</h2>
                        <div style={{flexDirection:'row'}}>
                        <input
                            value={user.firstname}
                            onChange={(ev) =>
                                setUser({ ...user, firstname: ev.target.value })
                            }
                            placeholder="First Name"
                        />
                        <input
                            value={user.lastname}
                            onChange={(ev) =>
                                setUser({ ...user, lastname: ev.target.value })
                            }
                            placeholder="Last Name"
                        />
                        </div>
                        <label for="city">Address: </label>
                        <select name="city">
                            <option>Province:</option>
                        </select>
                        <select name="city">
                            <option>City:</option>
                        </select>
                        <select name="city">
                            <option>Barangay:</option>
                        </select>
                        <select name="city">
                            <option>Street:</option>
                        </select>
                        <input
                            type="number"
                            value={user.contact_num}
                            onChange={(ev) =>
                                setUser({ ...user, contact_num: ev.target.value })
                            }
                            placeholder="Contact Number"
                        />
                         <input
                            type="email"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Email"
                        />

                        <h2>Pet Details</h2>
                        <input
                            type="file"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                        />
                        <input
                            type="text"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Pet Name"
                        />
                        <input
                            type="text"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Specie"
                        />
                        <input
                            type="email"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Birthdate"
                        />
                        <input
                            type="email"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Breed"
                        />

                        <h2>Create Account</h2>
                        <input
                            type="password"
                            onChange={(ev) =>
                                setUser({ ...user, password: ev.target.value })
                            }
                            placeholder="Password"
                        />
                        <input
                            type="password"
                            onChange={(ev) =>
                                setUser({
                                    ...user,
                                    password_confirmation: ev.target.value,
                                })
                            }
                            placeholder="Password Confirmation"
                        />
                        <button className="btn">Save</button>
                    </form>
                    //add next page to register the client to mobile app
                )}
            </div>
        </div>
    );
}
