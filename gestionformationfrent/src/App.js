import React from 'react';
import './App.css';
import CDCList from './components/cdc/CDCList';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>Gestion Formation</h1>
      </header>
      <main>
        <CDCList />
      </main>
    </div>
  );
}

export default App;
