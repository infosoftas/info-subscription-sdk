from __future__ import annotations
import datetime
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union
from uuid import UUID

if TYPE_CHECKING:
    from .demand_allowance import DemandAllowance
    from .demand_charge import DemandCharge
    from .payment_demand_detail_view import PaymentDemandDetailView
    from .payment_demand_fee_view import PaymentDemandFeeView
    from .payment_demand_reminder_view import PaymentDemandReminderView
    from .settlement_transactions import SettlementTransactions

@dataclass
class PaymentDemandView(Parsable):
    """
    Properties detailing a demand for a payment for services ordered or already rendered.            Provides the source billing data used to generate invoices.
    """
    # Allowances reducing the total amount.
    allowances: Optional[list[DemandAllowance]] = None
    # The total amount billed.
    amount: Optional[float] = None
    # The billing plan.
    billing_plan_id: Optional[UUID] = None
    # Charges increasing the total amount.
    charges: Optional[list[DemandCharge]] = None
    # The ledger id for the credit transaction.
    credit_ledger_id: Optional[UUID] = None
    # The credit note that crediting the demand has generated.
    credit_note_id: Optional[UUID] = None
    # Indicates if the demand was credited and when.
    credit_time: Optional[datetime.datetime] = None
    # The currency.
    currency: Optional[str] = None
    # Details for the payment demand that needs to be billed. Typically Orders and Subscriptions related, but may be standalone transactions as well.
    details: Optional[list[PaymentDemandDetailView]] = None
    # The payment due time.
    due_date: Optional[datetime.datetime] = None
    # An optional enterprise plan identifier indicating that the demand is assign to an Enterprise.
    enterprise_plan_id: Optional[UUID] = None
    # Fees such as extra cost for a specific Invoicing type.
    fees: Optional[list[PaymentDemandFeeView]] = None
    # Unique Id of the demand.
    id: Optional[UUID] = None
    # Identifier of the invoice recipient (Subscriber Contact).
    invoice_contact_id: Optional[UUID] = None
    # The identifier of the invoice this demand generated.
    invoice_id: Optional[UUID] = None
    # When was the demand issued/created.
    issue_date: Optional[datetime.datetime] = None
    # The LedgerId that represents this demand at its time of creation.
    ledger_id: Optional[UUID] = None
    # Optional order reference.
    order_reference: Optional[str] = None
    # The organization.
    organization_id: Optional[UUID] = None
    # Id for the payment agreement that followup payment requests and dunning will be based upon.
    payment_agreement_id: Optional[UUID] = None
    # An optional payment if the demand was settled by a single payment.
    payment_id: Optional[UUID] = None
    # The type of the payment method.
    payment_provider_type: Optional[str] = None
    # Reminders for the current demand.
    reminders: Optional[list[PaymentDemandReminderView]] = None
    # The time of settlement.
    settle_date: Optional[datetime.datetime] = None
    # A settlement transactions.
    settlement_transactions: Optional[SettlementTransactions] = None
    # The subscriber account the amount is charged to.
    subscriber_account: Optional[UUID] = None
    # The subscriber that this demand is charged for.
    subscriber_id: Optional[UUID] = None
    # An optional payment method transaction id.
    transaction_id: Optional[UUID] = None
    # The reason for the write off.
    write_off_reason: Optional[str] = None
    # Indicates if the demand was written off and when.
    write_off_time: Optional[datetime.datetime] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PaymentDemandView:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PaymentDemandView
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PaymentDemandView()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .demand_allowance import DemandAllowance
        from .demand_charge import DemandCharge
        from .payment_demand_detail_view import PaymentDemandDetailView
        from .payment_demand_fee_view import PaymentDemandFeeView
        from .payment_demand_reminder_view import PaymentDemandReminderView
        from .settlement_transactions import SettlementTransactions

        from .demand_allowance import DemandAllowance
        from .demand_charge import DemandCharge
        from .payment_demand_detail_view import PaymentDemandDetailView
        from .payment_demand_fee_view import PaymentDemandFeeView
        from .payment_demand_reminder_view import PaymentDemandReminderView
        from .settlement_transactions import SettlementTransactions

        fields: dict[str, Callable[[Any], None]] = {
            "allowances": lambda n : setattr(self, 'allowances', n.get_collection_of_object_values(DemandAllowance)),
            "amount": lambda n : setattr(self, 'amount', n.get_float_value()),
            "billingPlanId": lambda n : setattr(self, 'billing_plan_id', n.get_uuid_value()),
            "charges": lambda n : setattr(self, 'charges', n.get_collection_of_object_values(DemandCharge)),
            "creditLedgerId": lambda n : setattr(self, 'credit_ledger_id', n.get_uuid_value()),
            "creditNoteId": lambda n : setattr(self, 'credit_note_id', n.get_uuid_value()),
            "creditTime": lambda n : setattr(self, 'credit_time', n.get_datetime_value()),
            "currency": lambda n : setattr(self, 'currency', n.get_str_value()),
            "details": lambda n : setattr(self, 'details', n.get_collection_of_object_values(PaymentDemandDetailView)),
            "dueDate": lambda n : setattr(self, 'due_date', n.get_datetime_value()),
            "enterprisePlanId": lambda n : setattr(self, 'enterprise_plan_id', n.get_uuid_value()),
            "fees": lambda n : setattr(self, 'fees', n.get_collection_of_object_values(PaymentDemandFeeView)),
            "id": lambda n : setattr(self, 'id', n.get_uuid_value()),
            "invoiceContactId": lambda n : setattr(self, 'invoice_contact_id', n.get_uuid_value()),
            "invoiceId": lambda n : setattr(self, 'invoice_id', n.get_uuid_value()),
            "issueDate": lambda n : setattr(self, 'issue_date', n.get_datetime_value()),
            "ledgerId": lambda n : setattr(self, 'ledger_id', n.get_uuid_value()),
            "orderReference": lambda n : setattr(self, 'order_reference', n.get_str_value()),
            "organizationId": lambda n : setattr(self, 'organization_id', n.get_uuid_value()),
            "paymentAgreementId": lambda n : setattr(self, 'payment_agreement_id', n.get_uuid_value()),
            "paymentId": lambda n : setattr(self, 'payment_id', n.get_uuid_value()),
            "paymentProviderType": lambda n : setattr(self, 'payment_provider_type', n.get_str_value()),
            "reminders": lambda n : setattr(self, 'reminders', n.get_collection_of_object_values(PaymentDemandReminderView)),
            "settleDate": lambda n : setattr(self, 'settle_date', n.get_datetime_value()),
            "settlementTransactions": lambda n : setattr(self, 'settlement_transactions', n.get_object_value(SettlementTransactions)),
            "subscriberAccount": lambda n : setattr(self, 'subscriber_account', n.get_uuid_value()),
            "subscriberId": lambda n : setattr(self, 'subscriber_id', n.get_uuid_value()),
            "transactionId": lambda n : setattr(self, 'transaction_id', n.get_uuid_value()),
            "writeOffReason": lambda n : setattr(self, 'write_off_reason', n.get_str_value()),
            "writeOffTime": lambda n : setattr(self, 'write_off_time', n.get_datetime_value()),
        }
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        writer.write_collection_of_object_values("allowances", self.allowances)
        writer.write_float_value("amount", self.amount)
        writer.write_uuid_value("billingPlanId", self.billing_plan_id)
        writer.write_collection_of_object_values("charges", self.charges)
        writer.write_uuid_value("creditLedgerId", self.credit_ledger_id)
        writer.write_uuid_value("creditNoteId", self.credit_note_id)
        writer.write_datetime_value("creditTime", self.credit_time)
        writer.write_str_value("currency", self.currency)
        writer.write_collection_of_object_values("details", self.details)
        writer.write_datetime_value("dueDate", self.due_date)
        writer.write_uuid_value("enterprisePlanId", self.enterprise_plan_id)
        writer.write_collection_of_object_values("fees", self.fees)
        writer.write_uuid_value("id", self.id)
        writer.write_uuid_value("invoiceContactId", self.invoice_contact_id)
        writer.write_uuid_value("invoiceId", self.invoice_id)
        writer.write_datetime_value("issueDate", self.issue_date)
        writer.write_uuid_value("ledgerId", self.ledger_id)
        writer.write_str_value("orderReference", self.order_reference)
        writer.write_uuid_value("organizationId", self.organization_id)
        writer.write_uuid_value("paymentAgreementId", self.payment_agreement_id)
        writer.write_uuid_value("paymentId", self.payment_id)
        writer.write_str_value("paymentProviderType", self.payment_provider_type)
        writer.write_collection_of_object_values("reminders", self.reminders)
        writer.write_datetime_value("settleDate", self.settle_date)
        writer.write_object_value("settlementTransactions", self.settlement_transactions)
        writer.write_uuid_value("subscriberAccount", self.subscriber_account)
        writer.write_uuid_value("subscriberId", self.subscriber_id)
        writer.write_uuid_value("transactionId", self.transaction_id)
        writer.write_str_value("writeOffReason", self.write_off_reason)
        writer.write_datetime_value("writeOffTime", self.write_off_time)
    

