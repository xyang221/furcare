import React, { useEffect, useState } from "react";
import { useNavigate, useParams, Link } from "react-router-dom";
import axiosClient from "../axios-client";
import { useStateContext } from "../contexts/ContextProvider";

export default function PetOwnerForm() {
    const { id } = useParams();
    const navigate = useNavigate();
    const [loading, setLoading] = useState(false);
    const [errors, setErrors] = useState(null);
    const { setNotification } = useStateContext();
    
    const [petowner, setPetowner] = useState({
        id: null,
        user_id: null,
        firstname: '',
        lastname: '',
        contact_num: '',
        // address_id: null,
    });
 
    useEffect(() => {
        if (id) {
            setLoading(true);
            axiosClient.get(`/pet_owners/${id}`)
                .then(({ data }) => {
                    setLoading(false);
                    setPetowner(data);
                })
                .catch(() => {
                    setLoading(false);
                });
    }

        }, [id]);

        const handleChange = (e) => {
            const { user_id, value } = e.target;
            setPetowner({
              ...petowner,
              [user_id]: value,
            });
          };
   
    const onSubmit = (ev) => {
        ev.preventDefault();
        if (petowner.id) {
            axiosClient.put(`/pet_owners/${petowner.id}`, petowner)
                .then(() => {
                    setNotification("Petowner successfully updated");
                    navigate('/petowners');
                })
                .catch((err) => {
                    const response = err.response;
                    if (response && response.status == 422) {
                        setErrors(response.data.errors);
                    }
                });
        } else {
            axiosClient.post(`/pet_owners`, petowner)
                .then(() => {
                    setNotification("Pet Owner successfully created");
                    navigate('/petowners');
                })
                .catch((err) => {
                    const response = err.response;
                    if (response && response.status == 422) {
                        setErrors(response.data.errors);
                    }
                });

           
        }
    };
    // debugger;
console.log(petowner)
    return (
        <div>

            {petowner.id && <h1 className="title">Update Pet Owner </h1>}
            {!petowner.id && <h1 className="title">Registration</h1>}

            <div className="card animate fadeInDown">
                {loading && <div className="text-center">Loading...</div>}
                {errors && 
                    <div className="alert">
                        {Object.keys(errors).map((key) => (
                            <p key={key}>{errors[key][0]}</p>
                        ))}
                    </div>
                }
                {!loading && (
                    <form onSubmit={onSubmit}>
                        <h2>Pet Owner Details</h2>
                        <input type="text"
                            value={petowner.firstname}
                            onChange={(ev) =>
                                setPetowner({ ...petowner, firstname: ev.target.value })
                            }
                            placeholder="First Name"
                        />
                        <input type="text"
                            value={petowner.lastname}
                            onChange={(ev) =>
                                setPetowner({ ...petowner, lastname: ev.target.value })
                            }
                            placeholder="Last Name"
                        />

                        <input
                            type="number"
                            value={petowner.contact_num}
                            onChange={(ev) =>
                                setPetowner({ ...petowner,
                                    contact_num: ev.target.value,
                                })
                            }
                            placeholder="Contact Number"
                        />
                        <label htmlFor="address">Address</label>
                        <select id=""></select>

                        <button className="btn">Save</button>
                        <Link className="btn" to="/petowners">Back</Link>
                    </form>
                )}
            </div>
        </div>
    );
}
