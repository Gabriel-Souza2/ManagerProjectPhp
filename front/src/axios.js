import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['Authorization'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NTkzMzU0MjEsImV4cCI6MTU5MDQzOTQyMSwidXNlciI6eyJpZCI6IjQiLCJuYW1lIjoiR2FicmllbCIsImVtYWlsIjoiZ2FicmllbC5zb3V6YTJAaG90bWFpbC5jb20iLCJjcmVhdGVkIjpudWxsLCJtb2RpZmllZCI6bnVsbH19.UmjwdDc13Hq714F3bMB5EX8qQt5w1rrbhNsUNKUz3hA';