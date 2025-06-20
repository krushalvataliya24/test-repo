"use client";
import { all_routes } from '@/data/all_routes';
import Link from 'next/link';
/* eslint-disable @next/next/no-img-element */

import React from 'react'
const route = all_routes;

const SuccessMail = () => {

    return (
        <>
        {/* Success Email */}
        <div className="modal custom-modal fade" id="success_mail" role="dialog">
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header border-0 m-0 justify-content-end">
                <button
                  className="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i className="ti ti-x" />
                </button>
              </div>
              <div className="modal-body">
                <div className="success-message text-center">
                  <div className="success-popup-icon bg-light-blue">
                    <i className="ti ti-mail-opened" />
                  </div>
                  <h3>Email Connected Successfully!!!</h3>
                  <p>
                    Email Account is configured with “example@example.com”. Now you can
                    access email.
                  </p>
                  <div className="col-lg-12 text-center modal-btn">
                    <Link href={route.leadsDetails} className="btn btn-primary">
                      Go to email
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* /Success Email */}
      </>
      
    )
}

export default SuccessMail
