import React from 'react';
import Petcard from './Petcard.jsx';
 
export default class App extends React.Component {
        // constructor(props) {
        //     super(props);

        //     this.state = {
        //         logged_in: false,
        //         token: null
        //     };
        // }




    render() {
        return (
            <div className="container">
            <h1>Hi</h1>
            <Petcard/>
            </div>
        )
            
    }
}