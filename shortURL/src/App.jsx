// import { useState } from 'react'
import "./App.css";

function App() {
  return (
    <div>
      <h1>Insert URL</h1>
      <form action="index.php" method="post">
        <input type="text" name="longurl" id="longurl"></input>
        <button type="submit">Shorten URL </button>
      </form>
    </div>
  );
}
export default App;
