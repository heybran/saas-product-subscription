// @ts-check
export default class Product {
  constructor(aCustomer, data) {
    this._customer = aCustomer;
    this._name = data.name;
    this._price = data.price;
    this._setupDiscount = data.setupDiscount;
    this._recurringDiscount = data.recurringDiscount;
    this._subscriptionType = data.subscriptionType;
  }

  get name() {
    return this._name;
  }

  get price() {
    return this._price;
  }

  get setupDiscount() {
    return this._setupDiscount;
  }

  get recurringDiscount() {
    return this._recurringDiscount;
  }

  get subscriptionType() {
    return this._subscriptionType;
  }
}
