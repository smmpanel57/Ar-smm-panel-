const functions = require("firebase-functions");
const axios = require("axios");
const cors = require("cors")({ origin: true });

const API_URL = "https://my.smmxz.com/api/v2";
const API_KEY = "YOUR_SMMXZ_API_KEY_HERE"; // Apnar SMMXZ API Key ekhane bosaben

// 1. Service List Anar API
exports.getServices = functions.https.onRequest((req, res) => {
  cors(req, res, async () => {
    try {
      const response = await axios.post(API_URL, new URLSearchParams({
        key: API_KEY,
        action: "services"
      }));
      res.status(200).json(response.data);
    } catch (error) {
      res.status(500).send(error.toString());
    }
  });
});

// 2. Order Submitting API
exports.createOrder = functions.https.onRequest((req, res) => {
  cors(req, res, async () => {
    try {
      const { service, link, quantity } = req.body;
      const response = await axios.post(API_URL, new URLSearchParams({
        key: API_KEY,
        action: "add",
        service: service,
        link: link,
        quantity: quantity
      }));
      res.status(200).json(response.data);
    } catch (error) {
      res.status(500).send(error.toString());
    }
  });
});
