import axios from "axios";

const API_URI = process.env.MIX_API_URL;

export const savePost = async (type, data) => {
  await axios.post(API_URI + type + '/create', data, {
    headers:{
      'Content-Type':'multipart/form-data',
    }
  }).then(response => {
    console.log(response);
  }).catch(e => {
    console.log(e);
  })
}

export const updatePost = async (data, postId, type) => {
  console.log(data.getAll('content'))
  await axios.post(`${API_URI}${type}/edit/${postId}`, data, {
    headers:{
      'Content-Type':'multipart/form-data',
    }
  }).then(response => {
    console.log(response);
  }).catch(e => {
    console.log(e);
  })
}

export const deletePost = async (postId, type) => {
  const response = await axios.delete(`${API_URI}${type}/delete/${postId}`);
  return response
}

export const getAllPosts = async (type) => {
  const response = await axios.get(`${API_URI}${type}`)
  return response.data.data
}

export const getPostsForId = async (postId, type) => {
  const response = await axios.get(`${API_URI}${type}/${postId}`);
  return response;
}

// Site config

export const getSiteInfo = async () => {
  const response = await axios.get(`${API_URI}site/info`);
  return response
}

export const updateSiteInfo = async (siteData) => {
  const response = await axios.post(`${API_URI}site/config`, siteData, {
    headers:{
      'Content-Type':'multipart/form-data',
    }
  });
  return response;
}