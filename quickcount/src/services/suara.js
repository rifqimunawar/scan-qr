import axios from 'axios';

const getSuaraSatu = async () => {
  try {
    const response = await axios.get('https://quickcount.dashboard.iconnet-operation.com/api/totalSuaraSatu');
    return response.data; // Mengembalikan data dari respons
  } catch (error) {
    console.error('Error fetching data:', error);
    throw error; // Meneruskan kesalahan
  }
}

const getSuaraDua = async () => {
  try{ 
    const response = await axios.get('https://quickcount.dashboard.iconnet-operation.com/api/totalSuaraDua');
    return response.data;
  }catch(error){
    console.error('Error fetching data dua:', error);
    throw error;
  }
}

const getSuaraTiga = async () => {
  try{
    const respons = await axios.get('https://quickcount.dashboard.iconnet-operation.com/api/totalSuaraTiga');
    return respons.data;
  }catch(error){
    console.error('Error fetching data tiga:', error);
    throw error;
  }
}
export { getSuaraSatu, getSuaraDua, getSuaraTiga };
