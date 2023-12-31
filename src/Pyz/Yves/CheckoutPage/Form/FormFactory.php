<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage\Form;

use Pyz\Yves\CheckoutPage\Form\Steps\OrderNameForm;
use Pyz\Yves\CheckoutPage\Form\Steps\PaymentForm;
use Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface;
use SprykerShop\Yves\CheckoutPage\Form\FormFactory as SprykerFormFactory;

class FormFactory extends SprykerFormFactory
{
    /**
     * @return \Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface
     */
    public function getPyzPaymentFormCollection(): FormCollectionHandlerInterface
    {
        $createPaymentSubForms = $this->getPaymentMethodSubForms();
        $subFormDataProvider = $this->createSubFormDataProvider($createPaymentSubForms);

        return $this->createSubFormCollection(PaymentForm::class, $subFormDataProvider);
    }

    /**
     * @return \Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface
     */
    public function createOrderNameFormCollection(): FormCollectionHandlerInterface
    {
        return $this->createFormCollection($this->getOrderNameFormTypes());
    }

    /**
     * @return string[]
     */
    protected function getOrderNameFormTypes(): array
    {
        return [
            OrderNameForm::class,
        ];
    }
}
