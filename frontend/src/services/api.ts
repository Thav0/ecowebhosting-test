import axios from "axios";

const apiEndpoint =
  process.env.NODE_ENV === "development"
    ? "http://localhost:8000/api"
    : "https://gustavo.rootaccess.uk/backend/api";

export const api = axios.create({
  baseURL: apiEndpoint,
});
