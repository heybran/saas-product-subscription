// @ts-check
import Product from "./product.js";

export default class Customer {
  constructor(doc) {
    this._country = doc.country;
    this._products = [];
    doc.products.forEach((p) => this.addProduct(new Product(this, p)));
  }

  addProduct(arg) {
    this._products.push(arg);
  }

  get country() {
    return this._country;
  }

  get gst() {
    return this.country === "australia" ? 0.1 : 0;
  }
}
