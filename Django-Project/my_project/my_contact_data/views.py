from django.shortcuts import render
from my_contact_data.models import ContactForm
from django.shortcuts import render,HttpResponseRedirect,HttpResponse
from django.urls import reverse

# Create your views here.
def home(request):
    return render(request,'my_contact_data/home.html')

def portfolio(request):
    return render(request,'my_contact_data/aboutus.html')

def contactus(request):
	my_contact_form_data = ContactForm.objects.all()
	data = { 'my_contact_form_data' : my_contact_form_data }
	return render(request,'my_contact_data/contactdata.html',data)

def contact_form_submit(request):
    if request.method == "POST":
        full_name = request.POST['full_name']
        email_id = request.POST['email_id']
        contact_number = request.POST['contact_number']
        message = request.POST['message']
        ContactForm.objects.create(full_name=full_name,
                                   email_id=email_id,
                                   contact_number=contact_number,
                                   message=message
                                   )
    return HttpResponseRedirect(reverse('my_contact_data:contactdata'))	