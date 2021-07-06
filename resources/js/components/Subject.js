import Axios from 'axios';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Student from './Student';

class Example extends Component {
    state = {
        subject: '',
        student_id: ''
    };

    saveSubject = async e => {
        e.preventDefault();
        const res = await Axios.post(
            'http://localhost:8000/api/add-subject',
            this.state
        );
        if (res.data.status === 200) {
            console.log(res.data.message);
            this.setState({
                subject: '',
                student_id: ''
            });
        }
    };

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card mt-2">
                            <div className="card-header text-center">
                                Students Subject Form using React and Laravel
                            </div>

                            <div className="card-body">
                                <form onSubmit={this.saveSubject}>
                                    <div class="form-group">
                                        <label>Subjects</label>
                                        <input
                                            class="form-control"
                                            // value={this.state.subject}
                                        />
                                    </div>
                                    {<Student />}
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
