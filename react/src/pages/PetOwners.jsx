import React, { useEffect, useState } from "react";
import axiosClient from "../axios-client";
import { Link, useParams } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function PetOwners() {
    const { id } = useParams();
    const [pets, setPets] = useState([]);
    const [petowners, setPetowners] = useState([]);
    const [loading, setLoading] = useState(false);

    // const [addresses, setAddresses] = useState([]);

    const { setNotification } = useStateContext();

    const getPetowners = () => {

        document.title = "Pet Owners";
        
        setLoading(true);
        axiosClient.get('/pet_owners')
            .then(({ data }) => {
                setLoading(false);
                setPetowners(data.data);
            })
            .catch(() => {
                setLoading(false);
            });

        // axiosClient.get('/addresses')
        // .then(({ data }) => {
        //     setLoading(false);
        //     setAddresses(data.data);
        // })
        // .catch(() => {
        //     setLoading(false);
        // });
    };

    // const fetchAddresses = () => {
    //     setLoading(true);
    //     axiosClient.get('/petowners')
    //         .then(({ data }) => {
    //             setLoading(false);
    //             setAddresses(data.data);
    //         })
    //         .catch(() => {
    //             setLoading(false);
    //         });
    // };



    const onDelete = (po) => {
        if (!window.confirm("Are you sure?")) {
            return;
        }

        axiosClient.delete(`/petowners/${po.id}`).then(() => {
            setNotification("Pet Owner deleted");
            getPetowners();
        });
    };

    useEffect(() => {
    
            setLoading(true);
            axiosClient.get(`/pet_owners/${id}`)
                .then(({ data }) => {
                    setLoading(false);
                    setPetowners(data);
                })
                .catch(() => {
                    setLoading(false);
                });

                axiosClient.get(`/pet_owners/${id}/pets`)
                .then(({ data }) => {
                    setLoading(false);
                    setPets(data);
                })
                .catch(() => {
                    setLoading(false);
                });
    }

        , [id]);

    useEffect(() => {
        getPetowners();
    }, []);
    console.log(petowners)

    return (
        <div>
            <div className="default-form animated fadeInDown">
                <div className="form">
                    <h1 className="title">PET OWNERS</h1>
                    {/* <Link to="/petowners/new" className="btn">
                        Add new
                    </Link> */}

                    <div className="card animated fadeInDown">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
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
                                    {petowners.map(po => (
                                        <tr key={po.id}>
                                            <td><Link to={`/petowners/${po.id}/pets`} className="btn-edit" > Pets </Link></td>
                                            <td>{po.id}</td>
                                            <td>{`${po.firstname} ${po.lastname}`}</td>
                                            <td>{po.contact_num}</td>
                                            <td>{po.address.barangay}, {po.address.zipcode.city} </td>
                                            <td>
                                                <Link to={`/petowners/`+po.id} className="btn-edit" > Edit </Link>
                                                <button onClick={() => onDelete(po)} className="btn-delete" > Delete </button>
                                            
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
