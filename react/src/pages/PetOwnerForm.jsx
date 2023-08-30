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
    const [user, setUser] = useState({
        id: null,
        username: '',
        email: '',
        password: '',
        password_confirmation: '',
    });
    const [petowners, setPetowners] = useState({
        id: null,
        firstname: '',
        lastname: '',
        contact_num: '',
        address_id: null,
    });

    const [addresses, setAddresses] = useState([])
    const [zipcode, setZipcode] = useState('')

    const getAddresses = () => {
        axiosClient.get('/addresses')
        .then(({ data }) => {
            setLoading(false);
            setAddresses(data.data);
        })
        .catch(() => {
            setLoading(false);
        });
    }

    const getZipcodes = () => {
        axiosClient.get('/zipcodes')
        .then(({ data }) => {
            setLoading(false);
            setAddresses(data.data);
        })
        .catch(() => {
            setLoading(false);
        });
    }

    const handleZipcodeChange = async (event) => {
        const inputZipcode = event.target.value;
        setZipcode(inputZipcode);
    
      
          axiosClient.get(`/zipcodes/${inputZipcode}`)
          .then(({ data }) => {
            setLoading(false);
            setAddresses(data.data);

            
            if (data.zipcodes && data.zipcodes[inputZipcode]) {
                setAddresses(data.zipcodes[inputZipcode]);
              } else {
                setAddresses('Barangay not found');
              }
        })
        .catch(() => {
            setLoading(false);
        });
     
      };

    useEffect(() => {
    if (id) {
            setLoading(true);
            axiosClient.get(`/petowners/${id}`)
                .then(({ data }) => {
                    setLoading(false);
                    setPetowners(data);
                })
                .catch(() => {
                    setLoading(false);
                });
    }
    getAddresses();
    getZipcodes();
    handleZipcodeChange();
        }, [id]);

    const onSubmit = (ev) => {
        ev.preventDefault();
        if (petowners.id) {
            axiosClient.put(`/petowners/${petowners.id}`, petowners)
                .then(() => {
                    setNotification("User successfully updated");
                    navigate('/petowners');
                })
                .catch((err) => {
                    const response = err.response;
                    if (response && response.status == 422) {
                        setErrors(response.data.errors);
                    }
                });
        } else {
            axiosClient.post(`/petowners`, petowners)
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

            axiosClient.post(`/users`, user)
            .then(() => {
                setNotification('User successfully created')
                navigate('/petowners');
            })
            .catch((err) => {
                const response = err.response;
                if (response && response.status === 422) {
                    setErrors(response.data.errors);
                }
            });
        }
    };
    return (
        <div>
            {petowners.id && <h1 className="title">Update Pet Owner: </h1>}
            {!petowners.id && <h1 className="title">Registration</h1>}

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
                            value={petowners.firstname}
                            onChange={(ev) =>
                                setPetowners({ ...petowners, firstname: ev.target.value })
                            }
                            placeholder="First Name"
                        />
                        <input type="text"
                            value={petowners.lastname}
                            onChange={(ev) =>
                                setPetowners({ ...petowners, lastname: ev.target.value })
                            }
                            placeholder="Last Name"
                        />

                         <label className="">Address: </label>
                         {/* <input
                            type="number"
                            value={addresses.zipcode}
                            onChange={(ev) => setZipcode(ev.target.value)
                            }
                            placeholder="Zip Code"
                        /> */}
                         <input
                            type="text"
                            placeholder="Enter Zipcode"
                            value={zipcode}
                            onChange={handleZipcodeChange}
                        />

                        <select
                            value={zipcode || ''}
                            onChange={handleZipcodeChange}
                        >
                            <option value="">Select zipcode</option>
                            {addresses.map((address) => (
                                <option key={address.id} value={address.id}>
                                    {address.zipcode.zipcode}
                                </option>
                            ))}
                        </select>
                        <select
                            value={zipcode || ''}
                            onChange={handleZipcodeChange}
                        >
                            <option value="">Select zipcode</option>
                            {addresses.map((address) => (
                                <option key={address.zipcode.id} value={address.zipcode.id}>
                                    {address.barangay}
                                </option>
                            ))}
                        </select>

                         {/* <input
                            type="number"
                            value={addresses.zipcode_id}
                            onChange={(ev) =>
                                setAddresses({ ...addresses,
                                    zipcode_id: ev.target.value,
                                })
                            }
                            placeholder="Zipcode"
                        />
                         <select  value={petowners.address_id || ''}
                         onChange={(ev) =>
                                setAddresses({ ...addresses,
                                    address_id: ev.target.value,
                                })
                            }>
                         {addresses.map(zip => (
                            <option key={zip.zipcode_id} value={zip.zipcode_id}>{zip.zipcode.province} </option>
                            
                                    ))}
                        </select>
                         <select>
                         {addresses.map(zip => (
                            <option key={zip.zipcode_id} value={zip.zipcode_id}>{zip.zipcode.city} </option>
                            
                                    ))}
                        </select>

                        <select>
                         {addresses.map(add => (
                            <option key={add.id} value={add.id}>{add.barangay} </option>
                            
                                    ))}
                        </select> */}

                       

                        {/* <select
                            value={zipcode.address_id || ''}
                            onChange={(ev) =>
                                setPetowners({ ...zipcode, address_id: ev.target.value })
                            }
                        >
                            <option value="">Select an address</option>
                            {addresses.map((address) => (
                                <option key={address.id} value={address.id}>
                                    {address.barangay}
                                </option>
                            ))}
                        </select> */}

                        <input
                            type="number"
                            value={petowners.contact_num}
                            onChange={(ev) =>
                                setPetowners({ ...petowners,
                                    contact_num: ev.target.value,
                                })
                            }
                            placeholder="Contact Number"
                        />

                        <h2>Create An Account</h2>
                        <input
                            value={user.username}
                            onChange={(ev) =>
                                setUser({ ...user, username: ev.target.value })
                            }
                            placeholder="Username"
                        />
                        <input
                            type="email"
                            value={user.email}
                            onChange={(ev) =>
                                setUser({ ...user, email: ev.target.value })
                            }
                            placeholder="Email"
                        />
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
                        <Link className="btn" to="/petowners">Back</Link>
                    </form>
                )}
            </div>
        </div>
    );
}
