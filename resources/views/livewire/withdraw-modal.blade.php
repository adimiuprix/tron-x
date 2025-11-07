<div>
    <div class="modal fade" wire:ignore.self id="withdrawalModal" tabindex="-1" aria-labelledby="withdrawalModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content withdrawal-modal-content">
                <div class="modal-header withdrawal-modal-header">
                    <h5 class="modal-title" id="withdrawalModal"><i class="fa fa-money-bill"></i> Request Withdrawal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:loading.attr="disabled" wire:target="withdrawal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body withdrawal-modal-body">
                    <!-- Gateway-specific withdrawal options -->
    
                    <!-- Withdrawal Form -->
                    <div class="form-group">
                        <label for="amount">Amount to Withdraw</label>
                        <div class="input-group">
                            <input
                                type="number"
                                step="0.00000001"
                                min="0.00100000"
                                max="0.000000000000000"
                                class="form-control"
                                id="amount"
                                wire:model="amount"
                                placeholder="Enter amount"
                                wire:input.debounce.500ms="calcFees"
                            />
                            <div class="input-group-append">
                                <span class="input-group-text">TRX</span>
                            </div>
                        </div>
                        <small class="form-text"> <strong>Available:</strong> 0.00000000 TRX | <strong>Min:</strong> {{ $minwd }} TRX </small>
                    </div>
    
                    <!-- Fee Calculation -->
                    <div class="fee-calculation-container">
                        <div class="fee-calculation-header"><i class="fa fa-calculator"></i> Fee Calculation</div>
                        <div class="fee-calculation-details">
                            <div class="fee-row">
                                <span class="fee-label">Amount:</span>
                                <span class="fee-value">0.00000000 TRX</span>
                            </div>
                            <div class="fee-row">
                                <span class="fee-label">Fees:</span>
                                <span class="fee-value">0.00000000 TRX</span>
                            </div>
                            <div class="fee-row fee-total">
                                <span class="fee-label">You will receive:</span>
                                <span class="fee-value">0.00000000 TRX</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Quick Amount Buttons -->
                    <div class="form-group">
                        <label>Quick Amounts:</label>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-outline-secondary" wire:click="setMin">Min</button>
                            <button type="button" class="btn btn-outline-secondary" wire:click="setMax">Max</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer withdrawal-modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:loading.attr="disabled" wire:target="withdrawal">Cancel</button>
                    <button type="submit" class="btn btn-success" id="withdrawalConfirmBtn" wire:click="withdrawal" style="display: inline-block;"><i class="fa fa-hand-holding-usd"></i> Confirm Withdrawal</button>
                    <button type="button" class="btn btn-success" id="withdrawalProcessingBtn" style="display: none;"><i class="fa fa-spinner fa-spin"></i> Processing…</button>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        /* Withdrawal Modal Styling - Matching Buy Plans Theme */
        .withdrawal-modal-content {
            background: rgba(0, 0, 0, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
    
        .withdrawal-modal-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #22c55e, #6366f1, #f59e0b);
            opacity: 1;
        }
    
        .withdrawal-modal-header {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(99, 102, 241, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 20px 25px;
            color: var(--text);
        }
    
        .withdrawal-modal-header .modal-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin: 0;
        }
    
        .withdrawal-modal-header .modal-title i {
            color: #22c55e;
            margin-right: 8px;
        }
    
        .withdrawal-modal-header .close {
            color: var(--text);
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
    
        .withdrawal-modal-header .close:hover {
            opacity: 1;
            color: #ef4444;
        }
    
        .withdrawal-modal-body {
            padding: 25px;
            color: var(--text);
            background: rgba(0, 0, 0, 0.8);
        }
    
        .withdrawal-modal-body .form-group {
            margin-bottom: 20px;
        }
    
        .withdrawal-modal-body label {
            font-weight: 600;
            color: var(--text);
            margin-bottom: 8px;
            font-size: 14px;
        }
    
        .withdrawal-modal-body .form-control {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--text);
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
    
        .withdrawal-modal-body .form-control:focus {
            background: rgba(0, 0, 0, 0.9);
            border-color: #22c55e;
            box-shadow: 0 0 0 0.2rem rgba(34, 197, 94, 0.25);
            color: var(--text);
        }
    
        .withdrawal-modal-body .input-group-text {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.2);
            color: #22c55e;
            font-weight: 600;
        }
    
        .withdrawal-modal-body .form-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 13px;
            margin-top: 8px;
            font-weight: 500;
            line-height: 1.4;
        }
    
        .withdrawal-modal-body .form-text strong {
            color: #22c55e;
            font-weight: 700;
        }
    
        .withdrawal-modal-body .alert {
            border-radius: 8px;
            border: none;
            padding: 15px;
            margin-bottom: 20px;
        }
    
        .withdrawal-modal-body .alert-success {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border-left: 4px solid #22c55e;
        }
    
        .withdrawal-modal-body .alert-warning {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
            border-left: 4px solid #f59e0b;
        }
    
        .withdrawal-modal-body .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border-left: 4px solid #ef4444;
        }
    
        .withdrawal-modal-body .alert-secondary {
            background: rgba(107, 114, 128, 0.1);
            color: #6b7280;
            border-left: 4px solid #6b7280;
        }
    
        /* Fee Calculation Styling - Clean and Readable */
        .fee-calculation-container {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
    
        .fee-calculation-header {
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    
        .fee-calculation-header i {
            color: #22c55e;
            font-size: 12px;
        }
    
        .fee-calculation-details {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
    
        .fee-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0;
        }
    
        .fee-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
            font-weight: 500;
        }
    
        .fee-value {
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            font-family: "Courier New", monospace;
        }
    
        .fee-total {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 8px;
            margin-top: 4px;
        }
    
        .fee-total .fee-label {
            color: #22c55e;
            font-weight: 600;
        }
    
        .fee-total .fee-value {
            color: #22c55e;
            font-weight: 700;
            font-size: 13px;
        }
    
        .withdrawal-modal-body .btn-group .btn {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--text);
            transition: all 0.3s ease;
        }
    
        .withdrawal-modal-body .btn-group .btn:hover {
            background: rgba(34, 197, 94, 0.1);
            border-color: #22c55e;
            color: #22c55e;
        }
    
        .withdrawal-modal-footer {
            background: rgba(0, 0, 0, 0.8);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding: 20px 25px;
        }
    
        .withdrawal-modal-footer .btn {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }
    
        .withdrawal-modal-footer .btn-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
    
        .withdrawal-modal-footer .btn-danger:hover {
            background: rgba(239, 68, 68, 0.2);
            border-color: rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }
    
        .withdrawal-modal-footer .btn-success {
            background: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
    
        .withdrawal-modal-footer .btn-success:hover {
            background: rgba(34, 197, 94, 0.2);
            border-color: rgba(34, 197, 94, 0.3);
            color: #22c55e;
        }
    
        /* Modal size adjustments */
        .modal-dialog-centered {
            max-width: 500px;
        }
    
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .withdrawal-modal-header,
            .withdrawal-modal-body,
            .withdrawal-modal-footer {
                padding: 15px 20px;
            }
    
            .withdrawal-modal-header .modal-title {
                font-size: 16px;
            }
    
            .modal-dialog-centered {
                margin: 10px;
                max-width: calc(100% - 20px);
            }
        }
    </style>
</div>