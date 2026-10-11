import { api } from "@/boot/axios" //

export const getProducts = (params = {}) => { //[cite: 9]
  return api.get('/products', { params }).then(({ data }) => data) //[cite: 9]
}

export const createProduct = (params = {}) => { //[cite: 9]
  return api.post('/products', params).then(({ data }) => data) //[cite: 9]
}

export const getProduct = (id) => { //[cite: 9]
  return api.get(`/products/${id}`).then(({ data }) => data) //[cite: 9]
}

export const updateProduct = (id, params = {}) => { //[cite: 9]
  return api.put(`/products/${id}`, params).then(({ data }) => data) //[cite: 9]
}

export const deleteProduct = (id) => { //[cite: 9]
  return api.delete(`/products/${id}`).then(({ data }) => data) //[cite: 9]
}