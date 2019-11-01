import React from 'react';
import Petcard from './Petcard.jsx';

export default class Searchbox extends React.Component {
  constructor(props) {
      super(props);

      this.state = {
          search: null,
          data: null
      };
  }

  handleChange = () => {
    // console.log(document.querySelector("#search").value);
    fetch(`/api/search?search=${document.querySelector("#search").value}`)
      .then(response => response.json())
      .then(dataResponse => this.setState({ data: dataResponse }));
  }

  componentDidMount() {
    fetch("/api/pets")
        .then(response => response.json())
        .then(dataResponse => this.setState({ data: dataResponse }));
  }



render() {
  console.log(this.state.data);
  return (
      <>
      <label htmlFor="search">Search pets</label>
      <input type="text" name="search" id="search" onChange={this.handleChange}/>

      <div className="pets" >{this.state.data ? this.state.data.map(pet => 
        <Petcard
        pet={pet}
        />) : "loading"} </div>
      </>
  )
      
}
}