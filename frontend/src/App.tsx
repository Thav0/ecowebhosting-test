import React, { useEffect, useState } from "react";
import { api } from "./services/api";
import { formatPrice } from "./utils/format";

type User = {
  id: number;
  name: string;
  email: string;
};

type InvoiceData = {
  id: number;
  user_id: number;
  product_description: string;
  price: number;
  created_at: Date;
  user: User;
};

function App() {
  const [invoices, setInvoices] = useState<InvoiceData[]>([]);

  useEffect(() => {
    (async () => {
      const { data } = await api.get("/invoices");

      const formattedData = data.map((invoice: any) => {
        const date = new Date(invoice.created_at);
        invoice.created_at = new Intl.DateTimeFormat("gd-GB").format(date);
        invoice.price = formatPrice(invoice.price);

        return invoice;
      });

      setInvoices(formattedData);
    })();
  }, []);

  return (
    <div className="container">
      <h1>Invoices</h1>
      <table>
        <thead>
          <tr>
            <td>#</td>
            <td>Product</td>
            <td>Price</td>
            <td>Client Name</td>
            <td>Created At</td>
          </tr>
        </thead>
        <tbody>
          {invoices.length > 0 &&
            invoices.map((invoice) => (
              <tr key={invoice.id}>
                <td>{invoice.id}</td>
                <td>{invoice.product_description}</td>
                <td>{invoice.price}</td>
                <td>{invoice.user.name}</td>
                <td>{invoice.created_at}</td>
              </tr>
            ))}
        </tbody>
      </table>
    </div>
  );
}

export default App;
