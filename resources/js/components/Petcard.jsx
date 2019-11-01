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
            <img className="petimage" src={`./images/${this.props.pet.photo}`} alt=""/>
            <div className="infolist">
                <div className="row">
                    <p>Pet name:</p>
                    <p>{this.props.pet.name}</p>
                </div>
                <div className="row">
                    <p>Owner name:</p>
                    <p>{this.props.pet.owner}</p>
                </div>
                <div className="row">
                    <p>Breed:</p>
                    <p>{this.props.pet.breed}</p>
                </div>
                <div className="row">
                    <p>Weight:</p>
                    <p>{this.props.pet.weight}</p>
                </div>
                <div className="row">
                    <p>Age:</p>
                    <p>{this.props.pet.age}</p>
                </div>
            </div>
        </div>
    )
        
}
}