import { Link } from "react-router-dom"

export default function Signup() {

    const onSubmit = (ev) => {
        ev.preventDefault()
    }

    return (
        <div className="login-signup-form animated fadeInDown">
            <div className="form">
                <form onSubmit={onSubmit}>
                    <h1 className="title">Sign Up</h1>
                    <input type="firstname" placeholder="First Name" />
                    <input type="lastname" placeholder="Last Name" />
                    <input type="contact_num" placeholder="Contact Number" />
                    <input type="username" placeholder="UserName" />
                    <input type="password" placeholder="Password" />
                    <input type="password" placeholder="Password Confirmation" />
                    <button className="btn btn-block">Signup</button>
                    <p className="message">
                        Already have an account? <Link to="/login">Login</Link>
                    </p>
                </form>
            </div>
        </div>
    )
}