import { useRef, useState } from "react"
import { Link } from "react-router-dom"
import axiosClient from "../axios-client";
import { useStateContext } from "../contexts/ContextProvider";


export default function Signup() {

    const nameRef = useRef();
    const emailRef = useRef();
    const passwordRef = useRef();
    const passwordConfirmationRef = useRef();
    const [errors,setErrors] = useState(null);

    const {setUser, setToken} = useStateContext;


    const onSubmit = (ev) => {
        ev.preventDefault()
        const payload = {
            name: nameRef.current.value,
            email: emailRef.current.value,
            password: passwordRef.current.value,
            password_confirmation: passwordConfirmationRef.current.value,
        }

        axiosClient.post('/signup', payload)
            .then(({data}) => {
                setUser(data.user)
                setToken(data.token)
            })
            .catch(err => {
                const response = err.response;
                if (response && response.status == 422) {
                    setErrors(response.data.errors);
                }
            })

    }

    return (
        <div>
            <img className="bg-index" src="../src/assets/furcarebg.jpg"></img>
        <div className="login-signup-form animated fadeInDown">
            <div className="form">
                <form onSubmit={onSubmit}>
<<<<<<< HEAD
                    <h1 className="title">Sign Up</h1>
                    <input type="firstname" placeholder="First Name" />
                    <input type="lastname" placeholder="Last Name" />
                    <input type="contact_num" placeholder="Contact Number" />
                    <input type="username" placeholder="UserName" />
                    <input type="password" placeholder="Password" />
                    <input type="password" placeholder="Password Confirmation" />
=======
                    <h1>Sign Up</h1>
                    {errors && <div className="="alert>
                        {Object.keys(errors).map(key=> (
                            <p key={key}>{errors[key][0]}</p>
                        ))}
                        </div>
                         
                    }
                    <input ref={nameRef} type="name" placeholder="Name" />
                    <input ref={emailRef} type="email" placeholder="Email Address" />
                    {/* <input ref={Ref} type="username" placeholder="Username" /> */}
                    <input ref={passwordRef} type="password" placeholder="Password" />
                    <input ref={passwordConfirmationRef} type="password" placeholder="Password Confirmation" />
>>>>>>> 781b30d7769afa70d6ad61a46d21db2828100296
                    <button className="btn btn-block">Signup</button>
                    <p className="message">
                        Already have an account? <Link to="/login">Login</Link>
                    </p>
                </form>
            </div>
        </div>
        </div>
    )
}