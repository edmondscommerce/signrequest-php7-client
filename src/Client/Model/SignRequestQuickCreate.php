<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

final class SignRequestQuickCreate
{
    /**
     * Email of user sending the SignRequest (must be a validated email).
     *
     * @var string|null
     */
    protected $fromEmail;
    /**
     * Name to be used in the `From` email header, e.g. `{from_email_name} <no-reply@signrequest.com>`.
     *
     * @var string|null
     */
    protected $fromEmailName;
    /**
     * Have the sender of a SignRequest prepare the document before sending the request out, see: [prepare using the web interface](#section/Preparing-a-document/Prepare-using-the-web-interface).
     *
     * @var bool|null
     */
    protected $isBeingPrepared;
    /**
     * @var string|null
     */
    protected $prepareUrl;
    /**
     * URL at which SignRequest will redirect to when a document is signed.
     *
     * @var string|null
     */
    protected $redirectUrl;
    /**
     * URL at which SignRequest will redirect to when a document is declined.
     *
     * @var string|null
     */
    protected $redirectUrlDeclined;
    /**
     * Attachments that signers are required to upload.
     *
     * @var RequiredAttachment[]|null
     */
    protected $requiredAttachments = [];
    /**
     * Disable uploading/adding of attachments.
     *
     * @var bool|null
     */
    protected $disableAttachments;
    /**
     * Disable usage of signatures generated by typing (text).
     *
     * @var bool|null
     */
    protected $disableTextSignatures;
    /**
     * Disable adding of text.
     *
     * @var bool|null
     */
    protected $disableText;
    /**
     * Disable adding of dates.
     *
     * @var bool|null
     */
    protected $disableDate;
    /**
     * Disable all SignRequest status emails as well as the email that contains the signed documents.
     *
     * @var bool|null
     */
    protected $disableEmails;
    /**
     * Disable usage of uploaded signatures (images).
     *
     * @var bool|null
     */
    protected $disableUploadSignatures;
    /**
     * Disables storing timestamp proof hashes in blockchain integrations.
     *
     * @var bool|null
     */
    protected $disableBlockchainProof;
    /**
     * When true a text message verification is needed before the signer can see the document.
     *
     * @var bool|null
     */
    protected $textMessageVerificationLocked;
    /**
     * Subject of SignRequest email.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * Message to include in SignRequest email, may contain the following html tags: `a`, `abbr`, `acronym`, `b`, `blockquote`, `code`, `em`, `i`, `ul`, `li`, `ol`, and `strong`.
     *
     * @var string|null
     */
    protected $message;
    /**
     * `m`: only me, `mo`: me and others, `o`: only others.
     *
     * @var string|null
     */
    protected $who = 'o';
    /**
     * Automatically remind signers to sign a document, see: [automatic reminders](#section/Working-with-a-SignRequest/Automatic-reminders).
     *
     * @var bool|null
     */
    protected $sendReminders;
    /**
     * @var Signer[]|null
     */
    protected $signers = [];
    /**
     * @var string|null
     */
    protected $uuid;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $document;
    /**
     * @var string|null
     */
    protected $integration;
    /**
     * @var mixed|null
     */
    protected $integrationData;
    /**
     * Defaults to filename, including extension.
     *
     * @var string|null
     */
    protected $name;
    /**
     * ID used to reference document in external system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * Shared secret used in conjunction with <a href="#section/Frontend-API/SignRequest-js-client-(beta)">SignRequest-js client</a> to grant user access to a document that's not a member of the document's team.
     *
     * @var string|null
     */
    protected $frontendId;
    /**
     * Temporary URL to original file, expires in five minutes.
     *
     * @var string|null
     */
    protected $file;
    /**
     * Publicly accessible URL of document to be downloaded by SignRequest.
     *
     * @var string|null
     */
    protected $fileFromUrl;
    /**
     * URL at which to receive [event callbacks](#section/Events/Events-callback) for this document.
     *
     * @var string|null
     */
    protected $eventsCallbackUrl;
    /**
     * Base64 encoded document content.
     *
     * @var string|null
     */
    protected $fileFromContent;
    /**
     * Filename, including extension. Required when using `file_from_content`.
     *
     * @var string|null
     */
    protected $fileFromContentName;
    /**
     * @var string|null
     */
    protected $template;
    /**
     * Prefill signer input data, see [prefill tags](#section/Preparing-a-document/Prefill-tags-templates).
     *
     * @var InlinePrefillTags[]|null
     */
    protected $prefillTags = [];
    /**
     * @var InlineIntegrationData[]|null
     */
    protected $integrations = [];
    /**
     * @var FileFromSf|null
     */
    protected $fileFromSf;
    /**
     * Number of days after which a finished document (signed/cancelled/declined) will be automatically deleted.
     *
     * @var int|null
     */
    protected $autoDeleteDays;
    /**
     * Number of days after which a non finished document will be automatically expired.
     *
     * @var int|null
     */
    protected $autoExpireDays;

    /**
     * Email of user sending the SignRequest (must be a validated email).
     */
    public function getFromEmail(): ?string
    {
        return $this->fromEmail;
    }

    /**
     * Email of user sending the SignRequest (must be a validated email).
     */
    public function setFromEmail(?string $fromEmail): self
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    /**
     * Name to be used in the `From` email header, e.g. `{from_email_name} <no-reply@signrequest.com>`.
     */
    public function getFromEmailName(): ?string
    {
        return $this->fromEmailName;
    }

    /**
     * Name to be used in the `From` email header, e.g. `{from_email_name} <no-reply@signrequest.com>`.
     */
    public function setFromEmailName(?string $fromEmailName): self
    {
        $this->fromEmailName = $fromEmailName;

        return $this;
    }

    /**
     * Have the sender of a SignRequest prepare the document before sending the request out, see: [prepare using the web interface](#section/Preparing-a-document/Prepare-using-the-web-interface).
     */
    public function getIsBeingPrepared(): ?bool
    {
        return $this->isBeingPrepared;
    }

    /**
     * Have the sender of a SignRequest prepare the document before sending the request out, see: [prepare using the web interface](#section/Preparing-a-document/Prepare-using-the-web-interface).
     */
    public function setIsBeingPrepared(?bool $isBeingPrepared): self
    {
        $this->isBeingPrepared = $isBeingPrepared;

        return $this;
    }

    public function getPrepareUrl(): ?string
    {
        return $this->prepareUrl;
    }

    public function setPrepareUrl(?string $prepareUrl): self
    {
        $this->prepareUrl = $prepareUrl;

        return $this;
    }

    /**
     * URL at which SignRequest will redirect to when a document is signed.
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * URL at which SignRequest will redirect to when a document is signed.
     */
    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * URL at which SignRequest will redirect to when a document is declined.
     */
    public function getRedirectUrlDeclined(): ?string
    {
        return $this->redirectUrlDeclined;
    }

    /**
     * URL at which SignRequest will redirect to when a document is declined.
     */
    public function setRedirectUrlDeclined(?string $redirectUrlDeclined): self
    {
        $this->redirectUrlDeclined = $redirectUrlDeclined;

        return $this;
    }

    /**
     * Attachments that signers are required to upload.
     *
     * @return RequiredAttachment[]|null
     */
    public function getRequiredAttachments(): ?array
    {
        return $this->requiredAttachments;
    }

    /**
     * Attachments that signers are required to upload.
     *
     * @param RequiredAttachment[]|null $requiredAttachments
     */
    public function setRequiredAttachments(?array $requiredAttachments): self
    {
        $this->requiredAttachments = $requiredAttachments;

        return $this;
    }

    /**
     * Disable uploading/adding of attachments.
     */
    public function getDisableAttachments(): ?bool
    {
        return $this->disableAttachments;
    }

    /**
     * Disable uploading/adding of attachments.
     */
    public function setDisableAttachments(?bool $disableAttachments): self
    {
        $this->disableAttachments = $disableAttachments;

        return $this;
    }

    /**
     * Disable usage of signatures generated by typing (text).
     */
    public function getDisableTextSignatures(): ?bool
    {
        return $this->disableTextSignatures;
    }

    /**
     * Disable usage of signatures generated by typing (text).
     */
    public function setDisableTextSignatures(?bool $disableTextSignatures): self
    {
        $this->disableTextSignatures = $disableTextSignatures;

        return $this;
    }

    /**
     * Disable adding of text.
     */
    public function getDisableText(): ?bool
    {
        return $this->disableText;
    }

    /**
     * Disable adding of text.
     */
    public function setDisableText(?bool $disableText): self
    {
        $this->disableText = $disableText;

        return $this;
    }

    /**
     * Disable adding of dates.
     */
    public function getDisableDate(): ?bool
    {
        return $this->disableDate;
    }

    /**
     * Disable adding of dates.
     */
    public function setDisableDate(?bool $disableDate): self
    {
        $this->disableDate = $disableDate;

        return $this;
    }

    /**
     * Disable all SignRequest status emails as well as the email that contains the signed documents.
     */
    public function getDisableEmails(): ?bool
    {
        return $this->disableEmails;
    }

    /**
     * Disable all SignRequest status emails as well as the email that contains the signed documents.
     */
    public function setDisableEmails(?bool $disableEmails): self
    {
        $this->disableEmails = $disableEmails;

        return $this;
    }

    /**
     * Disable usage of uploaded signatures (images).
     */
    public function getDisableUploadSignatures(): ?bool
    {
        return $this->disableUploadSignatures;
    }

    /**
     * Disable usage of uploaded signatures (images).
     */
    public function setDisableUploadSignatures(?bool $disableUploadSignatures): self
    {
        $this->disableUploadSignatures = $disableUploadSignatures;

        return $this;
    }

    /**
     * Disables storing timestamp proof hashes in blockchain integrations.
     */
    public function getDisableBlockchainProof(): ?bool
    {
        return $this->disableBlockchainProof;
    }

    /**
     * Disables storing timestamp proof hashes in blockchain integrations.
     */
    public function setDisableBlockchainProof(?bool $disableBlockchainProof): self
    {
        $this->disableBlockchainProof = $disableBlockchainProof;

        return $this;
    }

    /**
     * When true a text message verification is needed before the signer can see the document.
     */
    public function getTextMessageVerificationLocked(): ?bool
    {
        return $this->textMessageVerificationLocked;
    }

    /**
     * When true a text message verification is needed before the signer can see the document.
     */
    public function setTextMessageVerificationLocked(?bool $textMessageVerificationLocked): self
    {
        $this->textMessageVerificationLocked = $textMessageVerificationLocked;

        return $this;
    }

    /**
     * Subject of SignRequest email.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * Subject of SignRequest email.
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Message to include in SignRequest email, may contain the following html tags: `a`, `abbr`, `acronym`, `b`, `blockquote`, `code`, `em`, `i`, `ul`, `li`, `ol`, and `strong`.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Message to include in SignRequest email, may contain the following html tags: `a`, `abbr`, `acronym`, `b`, `blockquote`, `code`, `em`, `i`, `ul`, `li`, `ol`, and `strong`.
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * `m`: only me, `mo`: me and others, `o`: only others.
     */
    public function getWho(): ?string
    {
        return $this->who;
    }

    /**
     * `m`: only me, `mo`: me and others, `o`: only others.
     */
    public function setWho(?string $who): self
    {
        $this->who = $who;

        return $this;
    }

    /**
     * Automatically remind signers to sign a document, see: [automatic reminders](#section/Working-with-a-SignRequest/Automatic-reminders).
     */
    public function getSendReminders(): ?bool
    {
        return $this->sendReminders;
    }

    /**
     * Automatically remind signers to sign a document, see: [automatic reminders](#section/Working-with-a-SignRequest/Automatic-reminders).
     */
    public function setSendReminders(?bool $sendReminders): self
    {
        $this->sendReminders = $sendReminders;

        return $this;
    }

    /**
     * @return Signer[]|null
     */
    public function getSigners(): ?array
    {
        return $this->signers;
    }

    /**
     * @param Signer[]|null $signers
     */
    public function setSigners(?array $signers): self
    {
        $this->signers = $signers;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getIntegration(): ?string
    {
        return $this->integration;
    }

    public function setIntegration(?string $integration): self
    {
        $this->integration = $integration;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntegrationData()
    {
        return $this->integrationData;
    }

    /**
     * @param mixed $integrationData
     */
    public function setIntegrationData($integrationData): self
    {
        $this->integrationData = $integrationData;

        return $this;
    }

    /**
     * Defaults to filename, including extension.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Defaults to filename, including extension.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * ID used to reference document in external system.
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * ID used to reference document in external system.
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Shared secret used in conjunction with <a href="#section/Frontend-API/SignRequest-js-client-(beta)">SignRequest-js client</a> to grant user access to a document that's not a member of the document's team.
     */
    public function getFrontendId(): ?string
    {
        return $this->frontendId;
    }

    /**
     * Shared secret used in conjunction with <a href="#section/Frontend-API/SignRequest-js-client-(beta)">SignRequest-js client</a> to grant user access to a document that's not a member of the document's team.
     */
    public function setFrontendId(?string $frontendId): self
    {
        $this->frontendId = $frontendId;

        return $this;
    }

    /**
     * Temporary URL to original file, expires in five minutes.
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * Temporary URL to original file, expires in five minutes.
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Publicly accessible URL of document to be downloaded by SignRequest.
     */
    public function getFileFromUrl(): ?string
    {
        return $this->fileFromUrl;
    }

    /**
     * Publicly accessible URL of document to be downloaded by SignRequest.
     */
    public function setFileFromUrl(?string $fileFromUrl): self
    {
        $this->fileFromUrl = $fileFromUrl;

        return $this;
    }

    /**
     * URL at which to receive [event callbacks](#section/Events/Events-callback) for this document.
     */
    public function getEventsCallbackUrl(): ?string
    {
        return $this->eventsCallbackUrl;
    }

    /**
     * URL at which to receive [event callbacks](#section/Events/Events-callback) for this document.
     */
    public function setEventsCallbackUrl(?string $eventsCallbackUrl): self
    {
        $this->eventsCallbackUrl = $eventsCallbackUrl;

        return $this;
    }

    /**
     * Base64 encoded document content.
     */
    public function getFileFromContent(): ?string
    {
        return $this->fileFromContent;
    }

    /**
     * Base64 encoded document content.
     */
    public function setFileFromContent(?string $fileFromContent): self
    {
        $this->fileFromContent = $fileFromContent;

        return $this;
    }

    /**
     * Filename, including extension. Required when using `file_from_content`.
     */
    public function getFileFromContentName(): ?string
    {
        return $this->fileFromContentName;
    }

    /**
     * Filename, including extension. Required when using `file_from_content`.
     */
    public function setFileFromContentName(?string $fileFromContentName): self
    {
        $this->fileFromContentName = $fileFromContentName;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Prefill signer input data, see [prefill tags](#section/Preparing-a-document/Prefill-tags-templates).
     *
     * @return InlinePrefillTags[]|null
     */
    public function getPrefillTags(): ?array
    {
        return $this->prefillTags;
    }

    /**
     * Prefill signer input data, see [prefill tags](#section/Preparing-a-document/Prefill-tags-templates).
     *
     * @param InlinePrefillTags[]|null $prefillTags
     */
    public function setPrefillTags(?array $prefillTags): self
    {
        $this->prefillTags = $prefillTags;

        return $this;
    }

    /**
     * @return InlineIntegrationData[]|null
     */
    public function getIntegrations(): ?array
    {
        return $this->integrations;
    }

    /**
     * @param InlineIntegrationData[]|null $integrations
     */
    public function setIntegrations(?array $integrations): self
    {
        $this->integrations = $integrations;

        return $this;
    }

    public function getFileFromSf(): ?FileFromSf
    {
        return $this->fileFromSf;
    }

    public function setFileFromSf(?FileFromSf $fileFromSf): self
    {
        $this->fileFromSf = $fileFromSf;

        return $this;
    }

    /**
     * Number of days after which a finished document (signed/cancelled/declined) will be automatically deleted.
     */
    public function getAutoDeleteDays(): ?int
    {
        return $this->autoDeleteDays;
    }

    /**
     * Number of days after which a finished document (signed/cancelled/declined) will be automatically deleted.
     */
    public function setAutoDeleteDays(?int $autoDeleteDays): self
    {
        $this->autoDeleteDays = $autoDeleteDays;

        return $this;
    }

    /**
     * Number of days after which a non finished document will be automatically expired.
     */
    public function getAutoExpireDays(): ?int
    {
        return $this->autoExpireDays;
    }

    /**
     * Number of days after which a non finished document will be automatically expired.
     */
    public function setAutoExpireDays(?int $autoExpireDays): self
    {
        $this->autoExpireDays = $autoExpireDays;

        return $this;
    }
}
