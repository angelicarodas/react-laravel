import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import List from './List';

export default class Usuario extends Component {
    render(){
        return(
          <div className="container">
            <div className="row">
              <div className="col-md-12">
                <h1 className="card-header card-header-primary">Usuarios</h1>
                <List />
              </div>
            </div>
          </div>         
        );

    }
}
if (document.getElementById('usuario')) {
    ReactDOM.render(<Usuario />, document.getElementById('usuario'));
}
