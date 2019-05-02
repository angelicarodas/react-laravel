import axios from 'axios';

export const getList = () =>{
    return axios
    .get('users',{
        headers:{'content-Type': 'application/json'}
    })
    .then(res => {
        return res.data;
    })

}

export const addItem = (name,email,password) =>{
    return axios
    .post ('users',
    {
        name:name,
        email:email,
        password:password
    },
    {
        headers:{'Content-Type':'application/json'}
    }
    )
    .then(res => {
        console.log(res)
    })
}

export const deleteItem = (id) => {
    axios.delete(`users/${id}`,{
        headers:{'Content-Type': 'application/json'}
    })
    .then(res =>{
        console.log(res)
    })
    .catch(err => {
        console.log(err)
    })
}

export const updateItem = (id,name ,email) => {
   return axios
    .put(`users/${id}`,{
        name:name,
        email:email
    },
    {
        headers:{'Content-Type': 'application/json'}
    })
    .then(res =>{
        console.log(res)
    })
    .catch(err => {
        console.log(err)
    })
}