import { useRef, useState } from "react";
import { Link } from "react-router-dom";
import axiosClient from "../axios-client";
import { useStateContext } from "../contexts/ContextProvider";

export default function Signup() {
    //user(staff) personal info
    // const firstnameRef = useRef();
    // const lastnameRef = useRef();
    // const contactnumRef = useRef();
    //users_id?
    //address id?

    //user acc details
    // const nameRef = useRef();
    const emailRef = useRef();
    const usernameRef = useRef();
    const passwordRef = useRef();
    const passwordConfirmationRef = useRef();

    const [errors, setErrors] = useState(null);
    const { setUser, setToken } = useStateContext();

    const onSubmit = (ev) => {
        ev.preventDefault();
        const payload = {
            // firstname: firstnameRef.current.value,
            // lastname: lastnameRef.current.value,
            // contact_num: contactnumRef.current.value,

            // name: nameRef.current.value,
            email: emailRef.current.value,
            username: usernameRef.current.value,
            password: passwordRef.current.value,
            password_confirmation: passwordConfirmationRef.current.value,
        };

        axiosClient
            .post('/signup', payload)
            .then(({ data }) => {
                setUser(data.user);
                setToken(data.token);
            })
            .catch((err) => {
                const response = err.response;
                if (response && response.status == 422) {
                    setErrors(response.data.errors);
                    // setErrors(err.response.data);
                }
            });
    };

    return (
        <div>
            <img className="bg-index" src="../src/assets/furcarebg.jpg"></img>
            <div className="login-signup-form animated fadeInDown">
                <div className="form">
                    <form onSubmit={onSubmit}>
                        <h1>User Details</h1>
                        {errors && (
                            <div className="alert">
                                {Object.keys(errors).map((key) => (
                                    <p key={key}>{errors[key][0]}</p>
                                ))}
                            </div>
                        )}
                        {/* <input ref={firstnameRef} type="text" placeholder="First Name" />
                        <input ref={lastnameRef} type="text" placeholder="Last Name" />
                        <input ref={contactnumRef} type="number" placeholder="Contact Number" /> */}

                        <h1>Create an Account</h1>
                        {/* <input ref={nameRef} type="text" placeholder="Name" /> */}
                        <input
                            ref={emailRef}
                            type="email"
                            placeholder="Email"
                        />
                        <input
                            ref={usernameRef}
                            type="text"
                            placeholder="Username"
                        />
                        <input
                            ref={passwordRef}
                            type="password"
                            placeholder="Password"
                        />
                        <input
                            ref={passwordConfirmationRef}
                            type="password"
                            placeholder="Password Confirmation"
                        />
                        <button className="btn btn-block">Signup</button>
                        <p className="message">
                            Already have an account?{" "}
                            <Link to="/login">Login</Link>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    );
}
