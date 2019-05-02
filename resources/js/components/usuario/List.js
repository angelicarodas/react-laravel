import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {getList, addItem,deleteItem,updateItem} from './ListFunciones';

export default class List extends Component {
    constructor(props){
        super(props)
        this.state = {
            id:'',
            name:'',
            email:'',
            password:'',
            editDisabled:false,
            items:[]
        }
        this.onSubmit = this.onSubmit.bind(this)
        this.onChange =this.onChange.bind(this)
    }

    componentDidMount(){
        this.getAll()
    }

    onChange (e){
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    getAll(){
        getList().then(data => {
            this.setState({
                id:'',
                name:'',
                email:'',
                password:'',
                items:[...data]
            },
            ()=>{
               console.log(this.state.items)
            })
        })
    }

    onSubmit (e){
        e.preventDefault()
        addItem(this.state.name,this.state.email,this.state.password).then(()=>{
            this.getAll()
        })
        this.setState({
           name:'',
           email:'',
           password:''
        })
    }

    onUpdate (e){
        e.preventDefault()
        console.log(this);
        updateItem(this.state.id,this.state.name,this.state.email).then(()=>{
            this.getAll()
        })
        this.setState({
           id:'',
           name:'',
           email:'',
           editDisabled:''
        })
        this.getAll()
    }

    onEdit (itemid,e){
        e.preventDefault()
        //console.log(itemid);
        var data = [...this.state.items]
        //console.log(data);
        data.forEach((item,index) =>{
            if(item.id === itemid){
                this.setState({
                    id:item.id,
                    name:item.name,
                    email:item.email,
                    editDisabled:true
                })
               
            }
        })
    }

    onDelete = (val,e) => {
        e.preventDefault()
        deleteItem(val)
        this.getAll()
    }

    render(){
        return(
        <div className="col-md-12">
            <div className="card-body">
              <table id="table" className="display nowrap" style={{width:'100%'}}>
                 <thead>
                     <tr>
                       <th className="text-primary" >idUsuario</th>
                       <th className="text-primary">Nombre</th>
                       <th className="text-primary">Email</th>
                       <th className="text-primary">Acciones</th>
                     </tr>
                 </thead>
                    <tbody>
                        {this.state.items.map((item,index)=>{
                         return<tr key={index} >
                              <td className="text-left" >{item.id}</td>
                              <td className="text-left">{item.name}</td>
                              <td className="text-left">{item.email}</td>
                              <td className='text-right'>
                                 <button href=""
                                 className="btn btn-dark"
                                 disabled={this.state.editDisabled}
                                 onClick={this.onEdit.bind(
                                     this,
                                     item.id
                                 )}>
                                 Editar
                                 </button>
                                 <button href=""
                                 className="btn btn-warning "
                                 disabled={this.state.editDisabled}
                                 onClick={this.onDelete.bind(
                                     this,
                                     item.id
                                 )}>
                                 Eliminar
                                 </button>
                              </td>
                            </tr>
                        })}
                    </tbody>
              </table>
              </div><br></br><br></br>
            <form onSubmit = {this.onSubmit}>
              <div className="col-md-12">
              <h3 className="card-header card-header-primary">Editar Usuarios</h3>
                 <div className="col-md-12"><br></br>
                 <div className="col-md-8">
                    <label>Nombre</label><br></br>
                    <input type="text" 
                    className="form-control" 
                    id="name" 
                    name="name" 
                    value={this.state.name || ''}
                    onChange={this.onChange.bind(this)}>
                    </input>
                  </div>
                  <div className="col-md-8">
                    <label>Email</label><br></br>
                    <input type="text" 
                    className="form-control" 
                    id="email" 
                    name="email" 
                    value={this.state.email || ''} 
                    onChange={this.onChange.bind(this)}>
                    </input>                    
                  </div>                  
                 </div>                 
              </div><br></br>
              {!this.state.editDisabled?(
                  <button type='submit' className="btn btn-success btn-block"
                  onClick={this.onSubmit.bind(this)}>
                    Submit
                  </button>
              ):(
                  ''
              )}
              {this.state.editDisabled ?(
                  <button type="submit"
                  className="btn btn-primary btn-block"
                  onClick={this.onUpdate.bind(this)}>Actualizar</button>
              ):(
                  ''
              )}
         </form>
         <br></br><br></br>
     </div>
        )
    }
}

