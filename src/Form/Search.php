<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class Search extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('keywords', TextType::class, [
              'id' => 'keywords',
              'name' => 'keywords',
              'placeholder' => 'Enter Keyword or Item #',
              'unbxdattr' => 'sq',
              'tabindex' => 1,
              'autocomplete' => 'off',
              'class' => 'blur',
              'value' => '',
            ])
            ->add('quick_find_button', ButtonType::class, [
              'id' => 'quick_find_button',
              'type' => 'submit',
              'label' => '<span class="pe-7s-search"></span>',
              'label_html' => true,
              'unbxdattr' => 'sq_bt',
              'tabindex' => 2,
            ])
        ;
    }
}
