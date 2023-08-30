import React, { useEffect, useState } from "react";
import axiosClient from "../axios-client";
import { Link } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function PetOwners() {
    const [petowners, setPetowners] = useState([]);
    const [loading, setLoading] = useState(false);

    // const [addresses, setAddresses] = useState([]);

    const { setNotification } = useStateContext();

    const getPetowners = () => {

        document.title = "Pet Owners";
        
        setLoading(true);
        axiosClient.get('/petowners')
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
        getPetowners();
        // fetchAddresses();
    }, []);

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
                                            <td>{po.id}</td>
                                            <td>{`${po.firstname} ${po.lastname}`}</td>
                                            <td>{po.contact_num}</td>
                                            {/* <td>{po.address.zipcode.city} </td> */}
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
