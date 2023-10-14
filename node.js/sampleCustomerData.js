export default function sampleCustomerData() {
  return {
    country: "australia",
    products: [
      {
        name: "Standard",
        price: 29,
        setupDiscount: 5,
        recurringDiscount: 10,
        subscriptionType: "month",
      },
    ],
  };
}
