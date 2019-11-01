import React from 'react';

export default class Petcard extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            logged_in: false,
            token: null
        };
    }




render() {
    return (
        <div className="petcard">
            <img className="petimage" src="" alt=""/>
            <div className="infolist">
                <ul>
                    {/* <li>Pet name:{this.props.petName}</li>
                    <li>Owner name:{this.props.ownerName}</li>
                    <li>Breed:{this.props.breedName}</li>
                    <li>Weight:{this.props.weight}</li>
                    <li>Age:{this.props.age}</li> */}

                    <li>Pet name:</li>
                    <li>Owner name:</li>
                    <li>Breed:</li>
                    <li>Weight:</li>
                    <li>Age:</li>
                </ul>
            </div>
        </div>
    )
        
}
}