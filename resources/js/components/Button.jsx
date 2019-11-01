import React from 'react';


export default class Button extends React.Component {
  // constructor(props) {
  //     super(props);

  //     this.state = {
  //         search: null,
  //         data: null
  //     };
  // }
  
  handleClick = () => {
    if (this.props.type === "update") {
      return location.href = `/${this.props.petid}/form`
    } else if (this.props.type === "delete") {
      fetch(`/${this.props.petid}/form`, {
        method: "DELETE",
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
    }
    
  }



render() {
  return (
      <>
      <button className={this.props.type} onClick={this.handleClick}>{this.props.type}</button>
      </>
  )
      
}
}