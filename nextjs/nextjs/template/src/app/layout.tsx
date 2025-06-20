import "../../node_modules/bootstrap/dist/css/bootstrap.min.css"
import BootstrapJs from "../core/common/bootstrap-js/bootstrapjs";
import "../style/index.scss";
import "../style/css/feather.css";
import "../style/icon/boxicons/boxicons/css/boxicons.min.css";
import "../style/icon/weather/weathericons.css";
import "../style/icon/typicons/typicons.css";
import "../../node_modules/@fortawesome/fontawesome-free/css/all.min.css";
import "../../node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css";
import "../style/icon/ionic/ionicons.css";
import "../style/icon/tabler-icons/webfont/tabler-icons.css";

export const metadata = {
    title: "Dashboard | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management",
    description: "Streamline your business with our advanced CRM template. Easily integrate and customize to manage sales, support, and customer interactions efficiently. Perfect for any business size",
    keywords: "Advanced CRM template, customer relationship management, business CRM, sales optimization, customer support software, CRM integration, customizable CRM, business tools, enterprise CRM solutions",
    author: "Dreams Technologies",
    icons: {
      icon: "favicon.png",
      shortcut: "favicon.png", // Add shortcut icon for better support
      apple: "favicon.png", // Optional: for Apple devices (place in `public/`)
    },
  };
  
  export default function RootLayout({
    children,
  }: {
    children: React.ReactNode;
  }) {
    return (
      <html lang="en">
        <body>
          <>
            {children}
            <BootstrapJs/>
          </>
        </body>
      </html>
    );
  }