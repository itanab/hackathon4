import React from 'react';
import Searchbox from './Searchbox.jsx';
 
export default class App extends React.Component {
        constructor(props) {
            super(props);

            this.state = {
                data: null,
                logged_in: false,
                token: null
            };
        }

    componentDidMount() {
        fetch("/api/pets")
            .then(response => response.json())
            .then(dataResponse => this.setState({ data: dataResponse }));
    }

    render() {
        // console.log(this.state.data);
        // return (
        //     <div className="container">
        //     <Petcard/>
        //     <Petcard/>
        //     </div>
        // )

        return this.state.data ? 
        <>
        <Searchbox/>
        {/* {this.state.data.map(pet => 
        <Petcard
        pet={pet}
        />)} */}
        </>
        : "Loading..";
            
    }
}