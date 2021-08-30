import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import {APIHost as host} from './app.json';

ReactDOM.render(
  <nav className="navbar navbar-expand-lg navbar-light bg-light">
      <div className="container-fluid">
          <div className="container">
            <div className="row"  >
              <div className="col-2" id="logoBare">
                <img ></img>
              </div>
              
              <div className="col-6"><h4 className="text-center">izahay</h4>
              </div>
              <div className="col-1" id="setbar">
                <img ></img>
              </div>
              <div className="col-2">
                <h5 className="text-center">Mrs Ismael</h5>
              </div>
              <div className="col-1" id="avatar">
                <img ></img>
              </div>
            </div>
          </div>
          
      </div>
    </nav>,
  document.getElementById('root')
);

ReactDOM.render(
  <div className="card bg-light mb-3">
  <div className="form-groupe">
      <div className="row">
          <div className="col-3" id="avatar2"><img ></img></div>
          <div className="col-9">
              
              <h5 id="anarana">Julio</h5>
              <p className="text-secondary">Salama Tompoko</p>
          </div>
      </div>
  </div>
</div>,
  document.getElementById('divContact')
);
ReactDOM.render(
  <div className="card bg-light mb-3">
            
            <section className="message">
                        <div className="grid-message">
                            <div className="col-message-received">
                                <div className="message-received">
                                    <p>Salama Tompoko</p>
                                </div>
                                <div className="message-received">
                                    <p>Inona ny vao2 anao</p>
                                </div>
                            </div>
                            <div className="col-message-sent">
                                <div className="message-sent">
                                    <p>Salama ooo!!! tsisy ooo</p>
                                </div>
                            </div>
                            <div className="col-message-received">
                                <div className="message-received">

                                    <p>efa mety ny projet anao</p>
                                </div>
                            </div>
                            <div className="col-message-sent">
                                <div className="message-sent">
                                    <p>mbola vo manao mihintsy izay io</p>
                                </div>
                            </div>
                            <div className="col-message-received">
                                <div className="message-received">

                                    <p>Mazoto ary ooo</p>
                                </div>
                            </div>
                        </div>

                        
            </section>
            <div className="container">
                <div className="row">
                    <div className="col-11">
                        <textarea className="form-control" id="exampleTextarea" ></textarea>
                    </div>
                    <div className="col-1" id="picSend"><a id="picSend"><img></img></a></div>
                                
                </div>
            </div>
            
        </div>
  ,document.getElementById('divMessage')
  );

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
