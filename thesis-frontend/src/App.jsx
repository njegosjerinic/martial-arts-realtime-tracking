import { useEffect, useState } from "react";

function App() {
  const [message, setMessage] = useState(0);

  useEffect(() => {
    fetch("http://localhost:8000/api/test")
      .then((response) => response.json())
      .then((data) => setMessage(data.message))
      .catch(console.error);
  }, []);

  return <h1>{message}</h1>;
}

export default App;
