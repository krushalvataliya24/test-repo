import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PipelineListComponent } from './pipeline-list.component';

describe('PipelineListComponent', () => {
  let component: PipelineListComponent;
  let fixture: ComponentFixture<PipelineListComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PipelineListComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PipelineListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
