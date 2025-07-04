import React from 'react'
import Link from 'next/link';

const CustomFieldModals = () => {
  return (
  
<div>
  {/* Add Custom Fields */}
  <div className="modal custom-modal fade" id="add_fields" role="dialog">
    <div className="modal-dialog modal-dialog-centered">
      <div className="modal-content">
        <div className="modal-header">
          <h5 className="modal-title">Add Custom Fields</h5>
          <button className="btn-close" data-bs-dismiss="modal" aria-label="Close">	
            <i className="ti ti-x" />
          </button>
        </div>
        <div className="modal-body">
          <form >
            <div className="mb-3">
              <label className="col-form-label">Custom Fields For <span className="text-danger">*</span></label>
              <select className="select">
                <option>Choose</option>
                <option>Expense</option>
                <option>Transaction</option>
              </select>
            </div>
            <div className="mb-3">
              <label className="col-form-label">Label <span className="text-danger">*</span></label>
              <input type="text" className="form-control" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Type <span className="text-danger">*</span></label>
              <input type="text" className="form-control" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Default Value</label>
              <input type="text" className="form-control" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Required <span className="text-danger">*</span></label>
              <input type="text" className="form-control" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Status <span className="text-danger">*</span></label>
              <input type="text" className="form-control" />
            </div>
            <div className="modal-btn">
              <Link href="#" className="btn btn-light" data-bs-dismiss="modal">Cancel</Link>
              <Link href="#" className="btn btn-primary" data-bs-dismiss="modal">Save</Link>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/* /Add Custom Fields */}
  {/* Edit Custom Fields */}
  <div className="modal custom-modal fade" id="edit_fields" role="dialog">
    <div className="modal-dialog modal-dialog-centered">
      <div className="modal-content">
        <div className="modal-header">
          <h5 className="modal-title">Edit Custom Fields</h5>
          <button className="btn-close" data-bs-dismiss="modal" aria-label="Close">	
            <i className="ti ti-x" />
          </button>
        </div>
        <div className="modal-body">
          <form >
            <div className="mb-3">
              <label className="col-form-label">Custom Fields For <span className="text-danger">*</span></label>
              <select className="select">
                <option>Choose</option>
                <option selected>Expense</option>
                <option>Transaction</option>
              </select>
            </div>
            <div className="mb-3">
              <label className="col-form-label">Label <span className="text-danger">*</span></label>
              <input type="text" className="form-control" defaultValue="Name" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Type <span className="text-danger">*</span></label>
              <input type="text" className="form-control" defaultValue="Text" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Default Value</label>
              <input type="text" className="form-control" defaultValue="Name" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Required <span className="text-danger">*</span></label>
              <input type="text" className="form-control" defaultValue="Required" />
            </div>
            <div className="mb-3">
              <label className="col-form-label">Status <span className="text-danger">*</span></label>
              <input type="text" className="form-control" defaultValue="Active" />
            </div>
            <div className="modal-btn">
              <Link href="#" className="btn btn-light" data-bs-dismiss="modal">Cancel</Link>
              <button type="submit" className="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/* /Edit Custom Fields */}
  {/* Delete Fields */}
  <div className="modal custom-modal fade" id="delete_fields" role="dialog">
    <div className="modal-dialog modal-dialog-centered">
      <div className="modal-content">
        <div className="modal-header border-0 m-0 justify-content-end">
          <button className="btn-close" data-bs-dismiss="modal" aria-label="Close">	
            <i className="ti ti-x" />
          </button>
        </div>
        <div className="modal-body">
          <form >
            <div className="success-message text-center">
              <div className="success-popup-icon">
                <i className="ti ti-trash-x" />
              </div>
              <h3>Remove Field?</h3>
              <p className="del-info">Are you sure you want to remove it.</p>
              <div className="col-lg-12 text-center modal-btn">
                <Link href="#" className="btn btn-light" data-bs-dismiss="modal">Cancel</Link>
                <button type="submit" className="btn btn-danger">Yes, Delete it</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/* /Delete Fields -
*/}</div>

  )
}

export default CustomFieldModals