import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { EOVERFLOW } from 'constants';
import isEmail from 'validator/lib/isEmail';
import Axios from 'axios';

export default class Login extends Component {    

    constructor(props){
        super(props);
        this.state = {
            email:'',
            password:'',
            errors:{},
        };

        this.handleFieldChange=this.handleFieldChange.bind(this);
        this.handleFormSubmit=this.handleFormSubmit.bind(this);
    }

    validateUserInput(userData){

       let errors = {email:[], password:[]};
       if(!userData.email){
         errors.email.push('inserte su email');
       }

       if(!userData.password){
         errors.password.push('inserte su password');
       }

       if(!isEmail(userData.email)){
         errors.email.push('email incorrecto');
       }

       if (userData.password.length < 8){
         errors.password.push('su contraseña debe tener 8 caracteres o mas');
       }

       return errors;

    }
    
    renderErrorsFor (field) {
         if (this.state.errors[field]){

          return this.state.errors[field].map(error => (
            <span key={error}>
            <small style={{color:"#E27C3E"}}>{error}</small> <br/>
            </span>

          ));
         
         }
    }

    handleFieldChange(event){
        this.setState ({
            [event.target.name]:event.target.value
        });
    }

    handleFormSubmit(event){
        event.preventDefault();

        const errors = this.validateUserInput(this.state);
        if (errors.email.length > 0 || errors.password.length > 0){
          this.setState({
            errors
          });

          return;
        }
    //post de data to teh server 

        Axios.post('/login', this.state).then(response =>{
          window.location = 'usuario';
        }).catch(error =>{
         this.setState({
           errors: error.response.data.errors
         });
        });
    }
    render() {
        return (
            <form onSubmit={this.handleFormSubmit}>
            <h3 className="text-center my-5">Login</h3>
            <div className="form-group row">
              <label htmlFor="staticEmail" className="col-sm-3 col-form-label">Email</label>
              <div className="col-sm-9">
                <input 
                type="text"
                className="form-control" 
                id="staticEmail" 
                placeholder="email@example.com"
                name="email"
                onChange={this.handleFieldChange.bind(this)}
                 />

                 {this.renderErrorsFor('email')}

              </div>
            </div>
            <div className="form-group row">
              <label htmlFor="inputPassword" className="col-sm-3 col-form-label">Password</label>
              <div className="col-sm-9">
                <input 
                type="password" 
                className="form-control" 
                id="inputPassword" 
                placeholder="Password"
                name="password"
                onChange={this.handleFieldChange.bind(this)}
                 />

                 {this.renderErrorsFor('password')}
              </div>
            </div>
            <div className="form-group row">
              <label htmlFor="inputPassword" className="col-sm-3 col-form-label" />
              <div className="col-sm-9">
                <button className="btn btn-primary form-control" type="submit">Login</button>
              </div>
            </div>
          </form>
       
        );
    }
}

if (document.getElementById('login')) {
    ReactDOM.render(<Login />, document.getElementById('login'));
}
