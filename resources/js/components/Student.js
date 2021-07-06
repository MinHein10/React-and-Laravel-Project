import Axios from 'axios';
import React, { Component } from 'react';

class Student extends Component {
    state = {
        student_id: ''
    };

    componentDidMount() {
        Axios.get('http://localhost:8000/api/student').then(
            res => this.setState({ student_id: res.data })
            // console.log(res.data)
        );
    }

    render() {
        return (
            <div class="form-group">
                <label class="mr-sm-2">Students Info</label>
                <select class="form-select">
                    <option selected>Open this select menu</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        );
    }
}

export default Student;
