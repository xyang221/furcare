import React, { useEffect, useState } from "react";
import axiosClient from "../axios-client";
import { Link, useParams } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function PetOwners() {
    const { id } = useParams();
    const [petowners, setPetowners] = useState([]);
    const [pets, setPets] = useState([]);
    const [loading, setLoading] = useState(false);

    // const [addresses, setAddresses] = useState([]);

    const { setNotification } = useStateContext();

    const getPetowners = () => {

        document.title = "Pets";
        axiosClient.get('/pet_owners')
            .then(({ data }) => {
                setLoading(false);
                setPetowners(data.data);
            })
            .catch(() => {
                setLoading(false);
            });
    };

    const getPets = () => {

        document.title = "Pet";
        
        setLoading(true);
        axiosClient.get('/pets')
            .then(({ data }) => {
                setLoading(false);
                setPets(data.data);
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
    //     axiosClient.get('/pets')
    //         .then(({ data }) => {
    //             setLoading(false);
    //             setAddresses(data.data);
    //         })
    //         .catch(() => {
    //             setLoading(false);
    //         });
    // };

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

    const onDelete = (po) => {
        if (!window.confirm("Are you sure?")) {
            return;
        }

        axiosClient.delete(`/pets/${po.id}`).then(() => {
            setNotification("Pet Owner deleted");
            getPetowners();
        });
    };

    useEffect(() => {
        getPetowners();
        getPets();
        // fetchAddresses();
    }, []);

    return (
        <div>
            <div className="default-form animated fadeInDown">
                <div className="form">
                    <h1 className="title">PET</h1>
                    <Link to="/petowners" className="btn">
                       Back
                    </Link>
                    

                    <div className="card animated fadeInDown">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Gender</th>
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
                                    {pets.map(p => (
                                        <tr key={p.id}>
                                            <td>{p.id}</td>
                                            <td>{p.name}</td>
                                            <td>{p.birthdate}</td>
                                            <td>{p.gender}</td>
                                            <td>
                                                <Link to={`pets/`+p.id} className="btn-edit" > Edit </Link>
                                                <button onClick={() => onDelete(p)} className="btn-delete" > Delete </button>
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
