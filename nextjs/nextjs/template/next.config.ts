import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  /* config options here */
  // basePath: "/crms",

  redirects: async () => {
    return [
      {
        source: "/",
        destination: "/login", // Include the basePath in the destination
        permanent: true,
        locale: false,
      },
    ];
  },

  eslint: {
    ignoreDuringBuilds: true,
  },
  
};

export default nextConfig;
