import axios from 'axios';

const api = axios.create({
  baseURL: 'https://task-manager-1-production-4940.up.railway.app/api/tasks', // Laravel's base API URL
});

axios.get('https://task-manager-1-production-4940.up.railway.app/api/tasks')
  .then(res => console.log(res.data))
  .catch(err => console.error(err));

export default api;
