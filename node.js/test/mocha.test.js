// @ts-check
import { expect } from "chai";
import Customer from "../customer.js";
import sampleCustomerData from "../sampleCustomerData.js";

describe("australia customer pricing", () => {
  it("final price", () => {
    const customer = new Customer(sampleCustomerData());
    expect(customer.country).to.equal("australia");
  });

  // it("discount", () => {
  //   const customer = new Customer(sampleCustomerData());
  //   // expect(customer.discount).to.equal(20);
  // });

  // it("tax", () => {
  //   const customer = new Customer(sampleCustomerData());
  //   // expect(customer.tax).to.equal(2);
  // });
});
