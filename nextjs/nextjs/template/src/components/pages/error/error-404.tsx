import { all_routes } from '@/data/all_routes';
import Link from 'next/link';
import React from 'react'

const Error404Component = () => {
  const route = all_routes;
  return (
    <div className="d-flex flex-wrap w-100 vh-100 overflow-hidden">
  <div className="d-flex align-items-center justify-content-center flex-fill flex-column vh-100 overflow-auto">
    <div className="error-img mb-4">
      <img
        src="assets/img/authentication/error-404.png"
        className="img-fluid"
        alt=""
      />
    </div>
    <div className="text-center">
      <h3 className="fs-28 mb-3">Oops, something went wrong</h3>
      <p className="fs-16">
        Error 404 Page not found. Sorry the page you looking for <br /> doesn’t
        exist or has been moved
      </p>
      <Link href={route.dealsDashboard} className="btn btn-primary">
        <i className="ti ti-arrow-narrow-left me-1" /> Back to Dashboard
      </Link>
    </div>
  </div>
</div>

  )
}

export default Error404Component